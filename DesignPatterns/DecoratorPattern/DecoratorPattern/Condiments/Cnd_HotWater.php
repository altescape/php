<?php
/**
 * Created by michaelwatts
 * Date: 02/12/14
 * Time: 16:44
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern\Condiments;


class Cnd_HotWater extends CondimentDecorator
{
    public $beverage;

    function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Hot Water";
    }

    public function cost()
    {
        return .1 + $this->beverage->cost();
    }
}