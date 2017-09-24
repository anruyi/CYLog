<?php


namespace app\ctrl;

use app\model\GuestModel;
use app\model\IndexModel;
use core\CyPHP;

class indexCtrl extends CyPHP
{
    /**
     * 所有留言
     */
    public function index()
    {
        $model = new IndexModel();
        $data = $model->getPostCover();

        $this->assign('data',$data);

        $this->display('index.html');
    }

    /**
     * 添加留言
     */
    public function layout()
    {

        $this->display('layout.html');
    }


    public function single()
    {
        /**
         * 创建模型，获取内容数据
         */
        $model = new IndexModel();
        $data = $model->getPostAll();

        /**
         * 分别打入Post表单数据库信息和路由页面id数据
         */
//        $data['content'] = html_entity_decode($data['content'][$_GET['id']]);
        $this->assign('data',$data);
        $this->assign('id', $_GET['id']);

        $this->display('single.html');
    }

}