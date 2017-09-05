<?php
/**
 * Created by PhpStorm.
 * User: chenyi
 * Date: 17-8-20
 * Time: 14:07
 */
namespace core\lib;

use Medoo\Medoo;

/**
 * Class Model
 * @package core\lib
 * 模型层，不知道那个界面的模型层
 */
class Model extends Medoo
{
    public function __construct()
    {
        $option = Conf::all('database');
        parent::__construct($option);
    }
}