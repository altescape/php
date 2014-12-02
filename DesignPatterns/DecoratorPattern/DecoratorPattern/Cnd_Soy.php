<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:34
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern;

class Cnd_Soy extends CondimentDecorator {

    public $beverage;

    public function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {

        return $this->beverage->getDescription() . ", Soy";
    }

    public function cost()
    {
        return .15 + $this->beverage->cost();
    }

} 