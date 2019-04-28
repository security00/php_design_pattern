<?php
/**
 * Created by PhpStorm.
 * User: xql
 * Date: 2019/4/28
 * Time: 15:52
 */

spl_autoload_register(function ($class_name) {
    require_once __DIR__ . "/factory_pattern/" . $class_name . ".php";
});


$traveller = new TravelFactory('car');
$traveller->build()->go();