<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:34
 */

namespace DesignPatterns\DecoratorPattern;

class Sze_SuperMassive extends SizeDecorator {

    public $beverage;

    public function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {

        return $this->beverage->getDescription() . ", Super Massive";
    }

    public function cost()
    {
        return 5.00 + $this->beverage->cost();
    }

} 