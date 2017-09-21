<?php
namespace app\model;

/**
 * 管理员model
 */
use core\lib\Model;

class AdminModel extends Model
{
    public $table = 'admin';

    /**
     * 所有数据
     */
    public function all()
    {
        $ret = $this->select($this->table,'*');
        return $ret;
    }

    public function getLogin()
    {
        $data['username'] = $this->select($this->table,'username');
        $data['password'] = $this->select($this->table,'password');
        $data['email'] = $this->select($this->table,'email');
        $data['avatar'] = $this->select($this->table,'avatar');
        return $data;
    }
}