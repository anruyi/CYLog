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
     * @var
     * 选择调用的控制方法，是file存储还是mysql存储
     */
    static $class;

    static public function init()
    {
        $drive = Conf::get('DRIVE','log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class; //把弄过来的变量地址作为新的对象，神来之作。
    }
    static public function log($name,$file='log')
    {
        self::$class->log($name,$file);
    }
}