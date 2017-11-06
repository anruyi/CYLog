<?php
/**
 * User: CYLeft
 * 我脑残的给这个文件加了命名空间,后来才发现,都没有类体,还加什么命名空间,真是愚蠢.
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

/**
 * @param $name post参数
 * @param bool $default 默认返回值
 * @param bool $fitt 验证规则
 * @return bool
 */
function post($name, $default=null, $fitt=false)
{
    if (isset($_POST[$name])) {
        if ($fitt) {
            switch ($fitt) {
                case 'int':
                    if(is_numeric($_POST[$name]))
                        return $_POST[$name];
                    else
                        return $default;
                    break;
                    default:;
            }
        } elseif ($_POST[$name]!=null){
            return $_POST[$name];
        } else
            return $default;
    } else {
        return $default;
    }
}

/**
 * @param $url
 * [注意]jump之前不能有display()
 */
function jump($url)
{
    header("Location:".$url);
    exit;
}

/**
 * @return array|false|string
 * 获取ip
 */
function getIP() {
    if (getenv('HTTP_CLIENT_IP')) {
        $ip = getenv('HTTP_CLIENT_IP');
    }
    elseif (getenv('HTTP_X_FORWARDED_FOR')) {
        $ip = getenv('HTTP_X_FORWARDED_FOR');
    }
    elseif (getenv('HTTP_X_FORWARDED')) {
        $ip = getenv('HTTP_X_FORWARDED');
    }
    elseif (getenv('HTTP_FORWARDED_FOR')) {
        $ip = getenv('HTTP_FORWARDED_FOR');

    }
    elseif (getenv('HTTP_FORWARDED')) {
        $ip = getenv('HTTP_FORWARDED');
    }
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}