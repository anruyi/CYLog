<?php
/**
 * 本框架核心文件
 * [解释:]
 * 一 解析路由
 */
namespace core;

use core\lib\Log;
use core\lib\Route;

/**
 * Class CyPHP
 * @package core
 * 基类
 */
class CyPHP
{
    /**
     * @var array
     * 默认放入前端页面的数据，所有进入前端的数据都务必放进此数组内
     * 放入方法 assign();
     * assign means 分配
     */
    public $assign = array();

    /**
     * @var array
     * 自动加载类的变量，记录文件是否已经加载过
     */
    public static $classMap = array();

    /**
     * 启动框架
     */
    static public function run()
    {
        /**
         * XXX ：默认全局打开session，不知道这样好不好
         */
        session_start();

        /**
         * 启动日志,暂时没有写任何日志.
         * [注]此处无需include主要得益于自动加载类
         */
        Log::init();

        /**
         * 获取Route()的控制器名（自动追加Crtl.php）和方法
         * [注]此处无需include主要得益于自动加载类
         */
        $route = new Route();

        $ctrlName = $route->ctrl;
        $ctrlAction = $route->action;

        $ctrlPath = APP.'/ctrl/'.$ctrlName.'Ctrl.php';

        if (is_file($ctrlPath)){
            $ctrlClass = '\app\ctrl\\'.$ctrlName.'Ctrl';
            $indexCtrl = new $ctrlClass();
            $indexCtrl->$ctrlAction();
            Log::log('ctrl:'.$ctrlName.','.'action:'.$ctrlAction.','.'IP:'.getIP(),viewPages);
        }else {
            throw new \Exception('找不到控制器'.$ctrlPath);
        }

        p($_SESSION,'session');
        p(self::$classMap);

    }

    /**
     * 自动加载路由 cyphp/app/，如果页面未加载，则自动加载文件
     * @param $class
     * @return bool
     */
    static public function load($class)
    {
        /**
         * 自动读取文件的命名空间,并导入
         */
        if (isset($classMap[$class])) {
            return true;
        } else {
            $path = CYPHP.'/'.$class.'.php';
            if (is_file($path)) {
                include $path;
                self::$classMap[$class] = $path;
            } else  {
                false;
            }
        }
    }

    /**
     * @param $name
     * @param $value
     * [explain]:
     * 方法很简单，前端能获取所有的public静态参数
     * 通过assign()数组传递数据到前端界面
     */
    public function assign($name,$value)
    {
        $this->assign[$name] = $value;
    }

    /**
     * @param $file
     * [Twig]
     * 显示相应的view层页面
     */
    public function display($file)
    {
        $html = $file;
        $file = APP.'/views/'.$file;
        if (is_file($file)){

            /**
             * 使用TWIG模板引擎
             * 将页面通过TWIG模板引擎加载进页面
             */
//            require_once CYPHP.'/vendor/twig/twig/lib/Twig/Autoloader.php';

            \Twig_Autoloader::register();

            $loader = new \Twig_Loader_Filesystem(APP.'/views');
            $twig = new \Twig_Environment($loader, array(
                'cache' => CYPHP.'/log/compilation_cache',
                'debug' => 'DEBUG'
            ));

            $template = $twig->loadTemplate($html);
            $template->display($this->assign?$this->assign:array());

        } else {
            p('This is not a file',$file);
        }
    }
}