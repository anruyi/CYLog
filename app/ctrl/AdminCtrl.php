<?php
namespace app\ctrl;

use app\model\AdminModel;

use app\model\IndexModel;
use core\CyPHP;
use core\lib\Log;

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
     * 发布文章并存储
     * 一 数据库存储
     * 二 md文档存储
     */
    public function posting()
    {
        $model = new AdminModel();

        $title = post('title','我的博客');
        $author = post('author','作者');
        $summary = post('summary','这是一个摘要');
        $content = post('content');
        $type = post('type');
        //$labImg = post('labImg');
        $username = $_SESSION['username'];

        if($title=='我的博客' && $author=='作者' && $summary=='这是一个摘要'){

            $this->assign('notice','nothing');

        }else{

            $this->assign('notice','nothing');

            $model->insertOne($title,$author,$username,$content,$summary,$type);

            if ($type) {
                $this->_saveMarkDown($title,$username,$content);
            }

            Log::log('New Post name :'.$title.',editor is :'.$_SESSION['username'],'posting.log');

            jump("/index/index");
        }

        $this->display('postEditor.html');
    }

    /*
     * 保存md文件
     * [注意:]
     * 一 不可成为文件名的字符
     * 二 存储时间
     * TODO 解决分类问题!
     */
    private function _saveMarkDown($title='无题',$username='无名',$content='')
    {
        $MDTime = date("Y-m-d H:m:s",time());

        $MDFileName = preg_replace('/[\\\\\/:?<>|*"]/','-',$title);

        $header = '---'."\n"
            .'title: '."{$title}"."\n"
            .'date: '."{$MDTime}"."\n"
            .'author: '."{$username}"."\n"
            .'---'."\n";

        $MDFile = fopen(APP.'/assets/posts/'.$MDFileName.'.md',w);

        fwrite($MDFile,$header.$content);
    }
    //test

}