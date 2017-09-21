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
        $this->display('single.html');
    }

}