<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:34
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern\Sizes;

class Sze_Medium extends SizeDecorator
{

    public $beverage;

    public function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {

        return $this->beverage->getDescription() . ", Medium";
    }

    public function cost()
    {
        return 1.50 + $this->beverage->cost();
    }

} 