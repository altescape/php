<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:30
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern\Roasts;
use DesignPatterns\DecoratorPattern\DecoratorPattern\BeverageInterface;

class Bean_MediumRoast implements BeverageInterface {

    public function getDescription()
    {
        return "Medium Roast";
    }

    public function cost()
    {
        return .89;
    }
}