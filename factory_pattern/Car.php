<?php
/**
 * Created by PhpStorm.
 * User: xql
 * Date: 2019/4/28
 * Time: 15:33
 */

class Car implements Traveller
{
    public function go()
    {
        echo "Travel on drive car";
    }
}