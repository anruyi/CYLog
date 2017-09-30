<?php
namespace app\ctrl;

use app\model\AdminModel;

use app\model\IndexModel;
use core\CyPHP;

class AdminCtrl extends CyPHP
{
    /**
     * 登陆
     */
    public function login()
    {
        echo "hellochenyi";
        $model = new AdminModel();

        $data = $model->getLogin();

        $this->assign('data',$data);

        $this->display('login.html');

        if(isset($_POST['username'])) {
            foreach ($data['username'] as $val) {
                if($_POST['username'] == $val)
                    $this->display('index.html');
            }
        }

    }

    /**
     * 验证
     */
    public function test()
    {
        $model = new AdminModel();

        $SQLData = $model->getLogin();

        $data['username'] = post('username');
        $data['password'] = post('password');

        /**
         * userLoginState 用户是否登陆
         */
        $_SESSION['userLoginState'] = false;

        /**
         * 登陆状态，2为通过
         */
        $testState = 0;

        foreach ($SQLData['username'] as $val) {
            if($data['username'] == $val ) {
                $testState = 1;
            }
        }
        foreach ($SQLData['password'] as $val) {
            if($data['password'] == $val && $testState==1) {
                $testState++;
            }
        }
        if ($testState==2) {
            $_SESSION['userLoginState'] = true;
            //jump之前不能有display()
            jump('/index/index');
        } else {
            jump('/Admin/login');
        }
    }

    /**
     * 关于
     */
    public function about()
    {
        $this->display('about.html');
    }

    /**
     * 发布文章
     */
    public function posting()
    {
        $model = new AdminModel();
        $post['title'] = post('title','NULL');
        $post['content'] = post('content');
        $post['author'] = post('author','NULL');
        if($post['title']=="NULL"&&$post['author']='NULL'){

        }else{
            $model->insertOne($post['title'],$post['author'],$post['content']);
        }
        $this->display('postEditor.html');
    }

}