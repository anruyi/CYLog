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
use core\lib\ParseDown;

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
     * [页面渲染]
     * 一 渲染普通页面
     * 二 渲染MarkDown文件
     */
    public function single()
    {
        $model = new IndexModel();

        //上下页面
        $nextID = $model->getNextPostID($_GET['id'])[0];
        $prevID = empty(
            $model->getPrevPostID($_GET['id'])
        )?$_GET['id']:end($model->getPrevPostID($_GET['id']));

        //本页面数据,md检验并解析
        $data = $this->_parseDown($model->getPostOne($_GET['id']));

        //上下页面预览数据
        $nextData = $model->getPostOne($nextID);
        $prevData = $model->getPostOne($prevID);

        //上下页面数据,本页面数据,路由id,上下页id,用户,登陆状态.
        $this->assign('nextData',$nextData);
        $this->assign('prevData',$prevData);
        $this->assign('data',$data);
        $this->assign('id', $_GET['id']);
        $this->assign('nextID',$nextID);
        $this->assign('prevID',$prevID);
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

        $username = post('username');
        $password = post('password','null');
        $isRightUser = false;

        /**
         * 查找用户并验证密码
         */
        if($_SESSION['userLoginState']==0) {
            foreach ($data as $key=>$value) {

                if ($value['username'] == $username){
                    $isRightUser = true;
                    $this->assign('notice','right user');
                    p($this->assign['notice']);

                    if ($value['password'] == $password) {

                        $_SESSION['username'] = $username;

                        $_SESSION['userLoginState'] = 1;

                        jump('/index/index');

                    }else {
                        $this->assign('notice2',"wrong password".rand(1,20));
                    }
                } else {
                    if($isRightUser == false)
                        $this->assign('notice','wrong user');
                    continue;
                }
            }
        } else if ($_SESSION['userLoginState']==1){
            $_SESSION['userLoginState'] = 1;
            $this->assign('notice','请勿重复登陆');
        } else {
            $_SESSION['userLoginState'] = 0;
            $this->assign('notice',"您尚未登陆");
        }

        Log::log('login people is:'.$_SESSION['username'],'login.log');

        /**
         * 用户登陆信息
         */
        $this->assign('userLoginState',$_SESSION['userLoginState']);
        $this->assign('username',$_SESSION['username']);

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

        //$avatar = post('avatar');

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

    /**
     * @param $array
     * @return string
     * 生成解析好的文件
     */
    private function _parseDown($array)
    {
        if ($array[0]['type']==1) {
           $parse = new ParseDown();
           $data = $parse->text($array[0]['content']);
           return $data;
        } else {
            return $array[0]['content'];
        }
    }
}