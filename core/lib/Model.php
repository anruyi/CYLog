<?php

namespace core\lib;

use Medoo\Medoo;

/**
 * Class Model
 * @package core\lib
 * 模型层,给Medoo加上一层包装,方便格式化调用
 */
class Model extends Medoo
{
    public function __construct()
    {
        $option = Conf::all('database');
        parent::__construct($option);
    }
}