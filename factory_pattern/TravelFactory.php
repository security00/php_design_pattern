<?php
/**
 * Created by PhpStorm.
 * User: xql
 * Date: 2019/4/28
 * Time: 15:37
 */

class TravelFactory
{
    protected $trafficlTool;

    public function __construct($trafficlTool)
    {
        $this->trafficlTool = $trafficlTool;
    }

    public function build()
    {
        switch ($this->trafficlTool)
        {
            case 'leg':
                $obj = new Leg();
                break;
            case 'car':
                $obj = new Car();
                break;
            case 'train':
                $obj = new Train();
                break;
            default:
                die("error");
        }
        return $obj;
    }
}