<?php
/**
 * Created by michaelwatts
 * Date: 02/12/14
 * Time: 15:37
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern\Condiments;

class Cnd_FoamedMilk extends CondimentDecorator
{
    public $beverage;

    function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription(). ", Milk Foam";
    }

    public function cost()
    {
        return .12 + $this->beverage->cost();
    }
}