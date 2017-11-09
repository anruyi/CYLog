<?php
/**
 * Created by PhpStorm.
 * User: chenyi
 * Date: 17-8-23
 * Time: 9:28
 */

namespace core\lib\drive\log;

use core\lib\Conf;

class File
{
    /**
     * @var
     * 日志存储位置
     */
    public $path;

    /**
     * File constructor.
     * 默认完成位置缓存
     */
    public function __construct()
    {
        $conf = Conf::get('OPTION','log');
        $this->path = $conf['PATH'];
    }

    /**
     * @param $message
     * @param $file
     * @return bool|int
     * 编写博客
     */
    public function log($message,$file)
    {
        if (!is_dir($this->path.date('YmdH'))) { //判断是否存在日志路径，不存在就新建路径
            mkdir($this->path.date('YmdH'),'0777',true);
        }
        return file_put_contents($this->path.date('YmdH').'/'.$file.'.php',date('Y-m-d H:i:s').json_encode($message).PHP_EOL,FILE_APPEND);
    }
}