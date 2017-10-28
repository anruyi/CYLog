<?php
namespace app\model;

/**
 * 管理员model
 */
use core\lib\Model;

class UserModel extends Model
{
    public $table = 'user';
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
        $data['username'] = $this->select($this->table,'username');
        $data['password'] = $this->select($this->table,'password');
        $data['email'] = $this->select($this->table,'email');
        $data['avatar'] = $this->select($this->table,'avatar');
        return $data;
    }

    public function addOneUser($name,$email="",$password="")
    {
        $this->insert($this->table,[
            'username' => $name,
            'email' => $email,
            'password' => $password,
//            'created_at' => date("Y-m-d H:i:s",time()),
        ]);
    }

    /**
     * @param $title
     * @param string $author
     * @param string $content
     * 插入一片文章
     */
    public function insertOne($title,$author="",$content="")
    {
        date_default_timezone_set('PRC');
        $this->insert($this->post,[
            'title' => $title,
            'author' => $author,
            'content' => $content,
            'created_at' => date("Y-m-d H:i:s",time()),
        ]);
    }

}