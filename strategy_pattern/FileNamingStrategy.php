<?php
/**
 * Created by PhpStorm.
 * User: xql
 * Date: 2019/4/28
 * Time: 12:20
 */

/**
 * 创建一个抽象类,抽象类里面包含一个抽象方法
 * Class FileNamingStrategy
 */

abstract Class FileNamingStrategy
{
    abstract function createLinkName($filename);
}