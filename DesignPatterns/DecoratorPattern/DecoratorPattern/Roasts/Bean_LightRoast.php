<?php
/**
 * Created by michaelwatts
 * Date: 02/12/14
 * Time: 15:17
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern\Roasts;
use DesignPatterns\DecoratorPattern\DecoratorPattern\BeverageInterface;

class Bean_LightRoast implements BeverageInterface {

    public function getDescription()
    {
        return "Light Roast";
    }

    public function cost()
    {
        return 0.79;
    }
}