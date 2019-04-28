<?php
/**
 * Created by PhpStorm.
 * User: xql
 * Date: 2019/4/28
 * Time: 13:48
 */

/**
 *  单例模式, 构造函数与clone方法设置为private
 *  防止使用者在外部进行new或者clone 创建第二个DB class实例
 *  getInstance 是唯一可以访问DB class的方法
 * Class DB
 */
class DB
{
    static private $instance = NULL;

    static function getInstance()
    {
        if (self::$instance == NULL)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {

    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
}