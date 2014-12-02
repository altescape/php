<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:34
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern\Condiments;

class Cnd_ChocSyrup extends CondimentDecorator {

    public $beverage;

    public function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {

        return $this->beverage->getDescription() . ", Chocolate Syrup";
    }

    public function cost()
    {
        return .2 + $this->beverage->cost();
    }

}