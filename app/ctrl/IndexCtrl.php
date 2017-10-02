<?php


namespace app\ctrl;

use app\model\GuestModel;
use app\model\IndexModel;
use core\CyPHP;

/**
 * Class indexCtrl
 * @package app\ctrl
 * 目前只有两个功能
 * 一、获取所有post的封面并以瀑布流的形式展现 index
 * 二、获取指定页面数据 single
 * 三、跳转关于页面
 */
class indexCtrl extends CyPHP
{
    /**
     * 默认显示所有留言
     */
    public function index()
    {
        /**
         * 创建默认模型，获取内容数据
         */
        $model = new IndexModel();
        $data = $model->getPostCover();

        $this->assign('data',$data);

        $this->display('index.html');
    }

    /**
     * 显示指定页面
     */
    public function single()
    {
        /**
         * 创建默认模型，获取内容数据
         */
        $model = new IndexModel();

        $data = $model->getPostOne($_GET['id']);

        /**
         * 分别打入Post表单数据库信息和路由页面id数据
         */
        $this->assign('data',$data);

        $this->assign('id', $_GET['id']);

        $this->display('single.html');
    }

    /**
     * 关于页面显示
     */
    public function about()
    {
        $this->display('about.html');
    }


}