<?php
/**
 * Created by PhpStorm.
 * User: chenyi
 * Date: 17-8-23
 * Time: 9:24
 */

namespace core\lib;

class Log
{

    /**
     * 选择调用的控制方法，是file存储还是mysql存储
     */
    static $class;

    /**
     * 初始化log类
     */
    static public function init()
    {
        /**
         * 从conf中选择log类所使用的驱动
         * 这里使用的是lib/drive/log/file
         * [注:]此处自动include conf类
         */
        $drive = Conf::get('DRIVE','log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class; //把弄过来的变量地址作为新的对象，神来之作。
    }

    static public function log($name,$file='log')
    {
        self::$class->log($name,$file);
    }
}