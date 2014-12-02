<?php
/**
 * Created: michaelwatts
 * Date: 28/04/2014
 * Time: 20:31
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern2;


class Large extends SizeDecorator
{
    public $meal;

    public function __construct($meal)
    {
        $this->meal = $meal;
    }

    public function getDescription()
    {
        return $this->meal->getDescription() . ", made large";
    }

    public function cost()
    {
        return $this->meal->cost() + 1.50;
    }
} 