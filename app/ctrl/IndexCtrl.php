<?php
namespace app\ctrl;

/**
 * 默认模型
 */
use app\model\AdminModel;
use app\model\IndexModel;
use app\model\UserModel;
use core\CyPHP;
use core\lib\Log;

/**
 * Class indexCtrl
 * @package app\ctrl
 * [主界面]
 * 获取所有post的封面并以瀑布流的形式展现 index()
 * [主功能]
 * 一、获取指定页面数据 single()
 * 二、登陆功能实现 login()
 * 三、注册页面实现 register()
 * [副界面]
 * 一、关于页面 about()
 * [其他注意事项]
 * session已经开启
 */
class indexCtrl extends CyPHP
{
    /**
     * 默认显示所有留言
     */
    public function index()
    {
        $model = new IndexModel();
        $data = $model->getPostCover();

        /**
         * data（封面数据）导入前端页面
         * 用户登陆信息:1.登陆状态 2.登陆名
         */
        $this->assign('data',$data);
        $this->assign('userLoginState',$_SESSION['userLoginState']);
        $this->assign('username',$_SESSION['username']);


        $this->display('index.html');
    }

    /**
     * 显示指定页面
     */
    public function single()
    {
        $model = new IndexModel();
        $nextID = $model->getNextPostID($_GET['id']);
        $prevID = $model->getPrevPostID($_GET['id']);

        $data = $model->getPostOne($_GET['id']);
        $nextData = $model->getPostOne($nextID);
        $prevData = $model->getPostOne($prevID);
        /**
         * 1. Post表单数据库信息
         * 2. 路由页面id
         * 3. 登陆状态
         */
        $this->assign('nextData',$nextData);
        $this->assign('prevData',$prevData);
        $this->assign('data',$data);
        $this->assign('id', $_GET['id']);
        $this->assign('nextID',$nextID[0]);
        $this->assign('prevID',is_null($prevID)?$_GET['id']:end($prevID));
        $this->assign('username',$_SESSION['username']);
        $this->assign('userLoginState',$_SESSION['userLoginState']);

        $this->display('single.html');
    }

    /**
     * 普通用户登陆
     * 管理员可能不会从这里登陆
     */
    public function login()
    {
        $model = new AdminModel();
        $data = $model->getLogin();

        if(isset($_POST['username']) && $_SESSION['userLoginState']==0) {
            /**
             * 循环获取数据库中username值和post数据进行比较
             * 1. 设置session username名称
             * 2. 设置session userLoginState状态
             * 3. 返回前台数据 notice
             */
            foreach ($data['username'] as $key=>$value) {
                if ($value == $_POST['username']){

                    $_SESSION['username'] = $_POST['username'];

                    $_SESSION['userLoginState'] = 1;

                    $this->assign('notice',$_SESSION['username']);

                    jump('/index/index');

                } else {
                    $_SESSION['userLoginState'] = 0;

                    $this->assign('notice',"登陆失败");
                }
            }
        } else if ($_SESSION['userLoginState']==1){
            $_SESSION['userLoginState'] = 1;
            $this->assign('notice',请勿重复登陆);
        } else {
            $_SESSION['userLoginState'] = 0;
            $this->assign('notice',"您尚未登陆");
        }

        Log::log('login people is:'.$_SESSION['username'],'login.log');

        /**
         * 用户登陆信息
         */
        $this->assign('userLoginState',$_SESSION['userLoginState']);

        $this->display("login.html");
    }

    /**
     * 注册页面实现
     */
    public function register()
    {
        $model = new UserModel();

        $username = post('username');

        $password = post('password');

        $email = post('email');

        $avatar = post('avatar');

        if($username==null || $password==null || $password==null){

        }else{
            $model->addOneUser($username,$email,$password);
            jump("/index/index");
        }

        $this->display("register.html");
    }

    /**==================easy part=========================**/

    /**
     * 关于页面
     */
    public function about()
    {
        /**
         * 导入：
         * data（封面数据）导入前端页面
         * 用户登陆信息
         */
        $this->assign('userLoginState',$_SESSION['userLoginState']);
        $this->assign('notice',$_SESSION['username']);

        /**
         * 显示about用户页面
         */
        $this->display('about.html');
    }


}