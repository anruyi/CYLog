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
                    jump('/index/index');
                } else {
                    $this->assign('notice',"登陆失败");
                }
            }
        }

        $this->display('login.html');
    }

    /**
     * 验证
     */
//    public function test()
//    {
//        $model = new AdminModel();
//
//        $SQLData = $model->getLogin();
//
//        $data['username'] = post('username');
//        $data['password'] = post('password');
//
//        /**
//         * userLoginState 用户是否登陆
//         */
//        $_SESSION['userLoginState'] = false;
//
//        /**
//         * 登陆状态，2为通过
//         */
//        $testState = 0;
//
//        foreach ($SQLData['username'] as $val) {
//            if($data['username'] == $val ) {
//                $testState = 1;
//            }
//        }
//        foreach ($SQLData['password'] as $val) {
//            if($data['password'] == $val && $testState==1) {
//                $testState++;
//            }
//        }
//        if ($testState==2) {
//            $_SESSION['userLoginState'] = true;
//            //jump之前不能有display()
//            jump('/index/index');
//        } else {
//            jump('/Admin/login');
//        }
//    }

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