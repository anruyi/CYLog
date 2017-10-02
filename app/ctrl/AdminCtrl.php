<?php
namespace app\ctrl;

use app\model\AdminModel;

use app\model\IndexModel;
use core\CyPHP;

/**
 * Class AdminCtrl
 * @package app\ctrl
 * 管理员控制器，主要功能如下
 * 一、管理员登陆并验证 login
 * 二、管理员发布文章 posting
 */
class AdminCtrl extends CyPHP
{

    public $isLogin = false;

    /**
     * 登陆验证功能实现
     */
    public function login()
    {

        session_start();

        /**
         * 用户登陆状态
         */
        $_SESSION['userLoginState'] = false;

        $model = new AdminModel();

        $data = $model->getLogin();

        $this->assign('data',$data);

        if(isset($_POST['username'])) {
            /**
             * 循环获取数据库中username值
             * 和post数据进行比较
             */
            foreach ($data['username'] as $key=>$value) {
                if ($value == $_POST['username']){
                    p("登陆成功");
                    $_SESSION['username'] = $_POST['username'];
                    $_SESSION['userLoginState'] = true;
                    jump('/index/index');
                } else {
                    $this->assign('notice',"登陆失败");
                }
            }
        }

        $this->display("login.html");
    }

    /**
     * 发布文章
     */
    public function posting()
    {
        $model = new AdminModel();
        $post['title'] = post('title','NULL');
        $post['content'] = post('content');
        $post['author'] = post('author','NULL');
        if($post['title']=="NULL"&&$post['author']='NULL'){

        }else{
            $model->insertOne($post['title'],$post['author'],$post['content']);
        }
        $this->display('postEditor.html');
    }

}