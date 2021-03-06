<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:34
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern\Condiments;

class Cnd_WhippedCream extends CondimentDecorator {

    public $beverage;

    public function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {

        return $this->beverage->getDescription() . ", Whipped Cream";
    }

    public function cost()
    {
        return .4 + $this->beverage->cost();
    }

} 