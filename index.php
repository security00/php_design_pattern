<?php
/**
 * Created by PhpStorm.
 * User: xql
 * Date: 2019/4/28
 * Time: 12:12
 */

// 自动加载类文件
spl_autoload_register(function ($class_name) {
    $class_name = str_replace('\\','/',$class_name);
    require_once __DIR__."/strategy_pattern/".$class_name . ".php";
});