<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:30
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern;

/**
 * Class Bev_Espresso
 *
 * This is the essence of every coffee,
 * you should be able to have has many shots of these as you want.
 *
 * @package DesignPatterns\DecoratorPattern\DecoratorPattern
 */

class Shot_Espresso implements BeverageInterface {

    public $beverage;

    function __construct($beverage)
    {
        $this->beverage = $beverage;
    }


    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Espresso Shot";
    }

    public function cost()
    {
        return 1.99 + $this->beverage->cost();
    }
}