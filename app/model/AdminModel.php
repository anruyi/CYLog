<?php
namespace app\model;

/**
 * 管理员model
 */
use core\lib\Model;

class AdminModel extends Model
{
    public $table = 'admin';
    public $post = 'posts';
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
        $data = $this->select($this->table,[
            'username',
            'password',
            'email',
            'avatar'
        ]);
        return $data;
    }

    /**
     * @param $title
     * @param string $author
     * @param string $content
     * 插入一篇文章
     */
    public function insertOne($title,$author="",$editor="",$content="", $summary="",$type='0')
    {
        date_default_timezone_set('PRC');
        $this->insert($this->post,[
            'title' => $title,
            'author' => $author,
            'user_name' => $editor,
            'content' => $content,
            'summary' => $summary,
            'type' => $type,
            'created_at' => date("Y-m-d H:i:s",time()),
        ]);
    }

}