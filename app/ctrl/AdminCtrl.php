<?php
namespace app\ctrl;

use app\model\AdminModel;

use app\model\IndexModel;
use core\CyPHP;

/**
 * Class AdminCtrl
 * @package app\ctrl
 * 管理员控制器
 * 一、退出 logout()
 * 二、发布文章 posting()
 */
class AdminCtrl extends CyPHP
{
    public $isLogin = false;

    /**
     * 退出登陆
     */
    public function logout()
    {

        session_start();

        /**
         * 用户登陆状态
         */
        if($_SESSION['userLoginState']==1) {
            $_SESSION['userLoginState'] = 0;
            $this->assign('userLoginState',0);
        }
        jump("/index/index");
    }

    /**
     * 发布文章
     */
    public function posting()
    {
        $model = new AdminModel();

        $post['title'] = post('title','我的博客');
        $post['author'] = post('author','作者');
        $post['summary'] = post('summary');
        $post['content'] = post('content');
//        $post['labImg'] = $post('labImg');
//        $post['userName'] = $_SESSION['userName'];

        if($post['title']=='我的博客'||$post['author']=='作者'){

        }else{
            $model->insertOne($post['title'],$post['author'],$post['content'],$post['summary']);
            jump("/index/index/");
        }

        $this->display('postEditor.html');
    }

}