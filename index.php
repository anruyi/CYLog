<?php
/**
 * 入口文件,index.php
 * Date: 17-8-18
 * author: CY
 *
 * [解释:]
 * 一 定义路径变量,方便后续使用
 * 二 引入基础文件,并打开自动装载类,debug类
 * 三 启动框架
 */

use core\CyPHP;

/**
 * 当前框架所在目录
 */
define('CYPHP',realpath('./'));

/**
 * 核心文件core所处目录
 */
define('CORE',CYPHP.'/core');

/**
 * 项目文件：控制器、模型……
 */
define('APP',CYPHP.'/app');

/**
 * 调试开关,默认开启
 */
define('DEBUG',true);


define('MODEL','/app');

/**
 * composer方法
 * vendor内部自动加载类
 */
include "vendor/autoload.php";

if(DEBUG){
    /**
     * 开源错误提示工具Whoops
     */
    $whoops = new \Whoops\Run;
    $errorTitle = '框架出错!';
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();
    //display_errors 错误提示，init_set方法可以修改php配置
    ini_set('display_errors','On');
}else{
    ini_set('display_errors','Off');
}

/**
 * 引入常用基本方法
 */
include CORE.'/common/function.php';

/**
 * 引入框架
 */
include CORE.'/CyPHP.php';

/**
 * 设置自动加载,传递过去的参数是当前缺乏的文件地址
 * (自动加载route类)
 */
spl_autoload_register("core\CyPHP::load");

/**
 * 启动框架了,开不开心,意不意外?
 */
CyPHP::run();
