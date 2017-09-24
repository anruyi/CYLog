<?php
/**
 * Main Page Model
 * 主界面模型包涵：
 * 公共首、尾，文章封面
 */
namespace app\model;

use core\lib\Model;

class IndexModel extends Model
{
    public $table = 'posts';

    /**
     * 所有数据
     */
    public function all()
    {
        $ret = $this->select($this->table,'*');
        return $ret;
    }

    /**
     * @return array|bool
     * 获取文章封面数据，getPostCover
     * id title author summary time/
     */
    public function getPostCover()
    {
        $data = [
            'id' => $this->select($this->table,'id'),
            'title' => $this->select($this->table,'title'),
            'author' => $this->select($this->table,'author'),
            'summary' => $this->select($this->table,'summary'),
            'created_at' => $this->select($this->table,'created_at'),
            'updated_at' => $this->select($this->table,'updated_at'),
        ];
        return $data;
    }

    /**
     * @return array
     * 获取文章所有内容，getPostAll
     * 数据库几乎所有数据
     */
    public function getPostAll()
    {
        $data = [
            'id' => $this->select($this->table,'id'),
            'title' => $this->select($this->table,'title'),
            'author' => $this->select($this->table,'author'),
            'content' => $this->select($this->table, 'content'),
            'created_at' => $this->select($this->table,'created_at'),
            'updated_at' => $this->select($this->table,'updated_at'),
        ];
        return $data;
    }
}