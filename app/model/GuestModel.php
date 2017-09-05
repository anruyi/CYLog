<?php

namespace app\model;

use core\lib\Model;

class GuestModel extends Model
{
    public $table = 'guestbook';

    /**
     * 所有留言
     */
    public function all()
    {
        $ret = $this->select($this->table,'*');
        return $ret;
    }

    /**
     * 添加一个留言
     */
    public function addOne()
    {

    }
}