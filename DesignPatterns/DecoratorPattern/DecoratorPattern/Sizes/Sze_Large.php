<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:34
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern\Sizes;

class Sze_Large extends SizeDecorator
{

    public $beverage;

    public function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {

        return $this->beverage->getDescription() . ", Large";
    }

    public function cost()
    {
        return 2.00 + $this->beverage->cost();
    }

} 