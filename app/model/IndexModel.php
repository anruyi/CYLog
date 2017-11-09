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

    /**
     * @return array
     * 获得一篇文章
     */
    public function getPostOne($id)
    {
        $data =
            $this->select(
                $this->table,
                [
                    "title",
                    'author',
                    'content',
                    'summary',
                    'created_at',
                    'updated_at',
                ],
                [
                    "id[=]" => $id,
                ]
            );
        return $data;
    }

    /**
     * @param $id
     * @return array|bool
     * 翻页,后一条
     */
    public function getNextPostID($id)
    {
        /**
         * 如果有上一条数据，则返回数据
         * 如果没有,则返回当前id
         */
        $idd = $this->select($this->table,'id',[
            "id[>]" => $id,
        ]);
        if($idd==null) $idd[0] = $id;
        return $idd;
    }

    /**
     * @param $id
     * @return array|bool
     * 翻页,前一条
     * FIXME: 这里的返回值是有问题的
     */
    public function getPrevPostID($id)
    {
        /**
         * 如果有上一条数据，则返回数据
         * 如果没有,则返回当前id
         */
        $idd = $this->select($this->table,'id',[
            "id[<]" => $id,
        ]);
        if($idd!=null)
            return $idd;
        else
            return $id;
    }
}