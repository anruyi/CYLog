<?php
/**
 * User: CYLeft
 * Date: 17-8-18
 */
namespace core\lib;

/**
 * Class Route
 * @package core\lib
 * 将陌生的url转化为可识别的路径（这一步由.htaccess完成），
 * 并且提取其中的文件名和控制器，由其他控制器调用。
 */
class Route
{
    /**
     * @var $ctrl 控制器
     * @var $action 方法
     */
    public $ctrl;
    public $action;

    /**
     * Route constructor.
     * 初始化方法
     */
    public function __construct()
    {
        /**
         * 如进入默认路径xxx.com,则自动跳转致/index/index
         */
        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
            $pathArr =  explode('/',trim($_SERVER['REQUEST_URI'],'/'));
            if (isset($pathArr[0])){
                $this->ctrl = $pathArr[0];
                unset($pathArr[0]);
            }
            /**
             * 控制器不存在的时候，调用默认控制器index
             */
            if (isset($pathArr[1])){
                $this->action = $pathArr[1];
                unset($pathArr[1]);
            } else {
                $this->action = Conf::get('ACTION','route');
            }
        } else {   //www.xxx.com/index/index
            $this->ctrl = Conf::get('CTRL','route');
            $this->action = Conf::get('ACTION','route');
        }

        $i = 2;
        /**
         * 判断路径是否只有一套，如若不是，则pathArr不为空，路由继续解析
         */
        $count = 0;
        if (isset($pathArr)){
            $count = count($pathArr) + 1;
            while ($i<$count){
                $_GET[$pathArr[$i]] = $pathArr[$i+1];
                $i+=2;
            }
        }
    }
}