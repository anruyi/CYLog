<?php
/**
 * Created by PhpStorm.
 * User: chenyi
 * Date: 17-8-18
 * Time: 14:26
 */

/**
 * @param $var2
 * @param string $var1
 * 一个常用的替代php原生输出的函数
 */
function p($var2, $var1='')
{
    if(is_bool($var2)){
        echo $var2.':';
        var_dump($var2);
    }else if(is_null($var2)){
        echo $var2.':';
        var_dump(NULL);
    }else{
        echo
            "<pre style=
                '
                    border: solid #999 3px;border-radius: 5px;
                    width: 100%;font-size: xx-large;background-color: darkgrey;
                    color: #fff;text-align: left
                '
             >"
                .print_r($var1,true).print_r($var2,true).
            "</pre>";
    }
}