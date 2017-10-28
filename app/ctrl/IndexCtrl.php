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
 */
class indexCtrl extends CyPHP
{
    /**
     * 默认显示所有留言
     */
    public function index()
    {
        /**
         * 入口文件已开启session功能
         */

        $model = new IndexModel();
        $data = $model->getPostCover();

        /**
         * 导入：
         * data（封面数据）导入前端页面
         * 用户登陆信息、
         */
        $this->assign('data',$data);
        $this->assign('userLoginState',$_SESSION['userLoginState']);

        /**
         * 显示Log主界面
         */
        $this->display('index.html');
    }

    /**
     * 显示指定页面
     */
    public function single()
    {
        $model = new IndexModel();

        $data = $model->getPostOne($_GET['id']);

        /**
         * 导入
         * Post表单数据库信息、
         * 路由页面id、
         * 登陆状态
         */
        $this->assign('data',$data);
        $this->assign('id', $_GET['id']);
        $this->assign('userLoginState',$_SESSION['userLoginState']);

        /**
         * 显示Log完整内容的单页面
         */
        $this->display('single.html');
    }

    /**
     * 普通用户登陆
     * 管理员可能不会从这里登陆
     */
    public function login()
    {
        session_start();

        $model = new AdminModel();

        $data = $model->getLogin();

        if(isset($_POST['username']) && $_SESSION['userLoginState']==0) {
            /**
             * 循环获取数据库中username值
             * 和post数据进行比较
             */
            foreach ($data['username'] as $key=>$value) {
                if ($value == $_POST['username']){

                    $_SESSION['username'] = $_POST['username'];

                    $_SESSION['userLoginState'] = 1;

                    $this->assign('notice',"成功");

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

        Log::log('login people is:'.$_POST['username'],'login.log');

        /**
         * 导入
         * 用户登陆信息、
         */
        $this->assign('userLoginState',$_SESSION['userLoginState']);

        /**
         * 显示Log主界面
         */
        $this->display("login.html");
    }

    /**
     * 注册页面实现
     */
    public function register()
    {
        $model = new UserModel();

        $username = post('username','NULL');

        $password = post('password','NULL');

        if($username=='NULL' || $password=='NULL'){

        }else{
            $model->addOneUser($username,'',$password);
        }

        $this->display("register.html");
    }

    /**==================easy part=========================**/

    /**
     * 关于页面显示
     */
    public function about()
    {
        $this->display('about.html');
    }


}