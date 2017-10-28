<?php

//include "./core/common/function.php";

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

class Test
{
    public static $staticVal = 1;
    public $instanceVal = 1;

    public function __construct()
    {
        $this->a();
        $this->c();
        p(self::$staticVal,"class static ");
        p($this->instanceVal,"class instance ");
    }

    public function a()
    {
        self::$staticVal++;
        $this->instanceVal++;
    }

    public function b()
    {
        static $val = 1;
        $val1 = 1;
        $val++;
        $val1++;
        p($val,"function static ");
        p($val1,"function instance ");
    }

    public function c()
    {
        self::$staticVal++;
        $this->instanceVal++;
    }

    public function dis()
    {
        p(self::$staticVal,"class static ");
        p($this->instanceVal,"class instance ");
    }



}
p("调用a，c方法，分别让类内两参数自增并输出");
$test = new Test();

p("再次调用a，c方法，分别让类内两参数自增并输出");
$test->a();
$test->c();
$test->dis();

p("调用b方法，分别让方法内两参数自增并输出");
$test->b();

p("再次调用b方法，分别让方法内两参数自增并输出");
$test->b();

