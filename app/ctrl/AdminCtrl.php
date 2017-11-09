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

        $title = post('title','我的博客');
        $author = post('author','作者');
        $summary = post('summary','这是一个摘要');
        $content = post('content');
        $type = post('type');
//        $labImg = $post('labImg');
//        $userName = $_SESSION['userName'];

        if($title=='我的博客' && $author=='作者' && $summary=='这是一个摘要'){
            $this->assign('notice','nothing');
        }else{
            $model->insertOne($title,$author,$content,$summary,$type);
            jump("/index/index/");
        }

        $this->display('postEditor.html');
    }

}