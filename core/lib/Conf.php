<?php
/**
 * Author: CYLeft
 */
namespace core\lib;

class Conf
{
    /**
     * @var array
     * 缓存conf配置，在方法里的变量很快就会消亡
     */
    static public $conf = array();

    /**
     * @param $name
     * @param $file
     * @return mixed
     * @throws \Exception
     * 返回$conf['$name']，配置的名字
     */
    static public function get($name,$file)
    {
        /**
         * 拼接插件文件路径，从这里获取需要的参数
         */
        $path = CYPHP.'/core/config/'.$file.'.php';

        if (isset(self::$conf[$file])){
            return self::$conf[$file][$name];
        } else{
            if (is_file($path)){
                //include能返回包含文件的返回值,此处返回值是一个索引数组
                $conf = include $path;
                if (isset($conf[$name])){
                    self::$conf['$file'] = $conf;
                    return $conf[$name];
                } else{
                    throw new \Exception('没有这个配置项', $name);
                }
            } else{
                throw new \Exception('找不到配置文件', $file);
            }
        }

    }

    static public function all($file)
    {
        $path = CYPHP.'/core/config/'.$file.'.php';
        if (isset(self::$conf[$file])){
            return self::$conf[$file];
        } else{
            if (is_file($path)){
                $conf = include $path;
                self::$conf = $conf;
                return $conf;
            } else{
                throw new \Exception('找不到配置文件', $file);
            }
        }
    }
}