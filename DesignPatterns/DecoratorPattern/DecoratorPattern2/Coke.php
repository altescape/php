<?php
/**
 * Created: michaelwatts
 * Date: 28/04/2014
 * Time: 20:31
 */

namespace DesignPatterns\DecoratorPattern2;


class Coke extends DrinksDecorator
{
    public $meal;

    public function __construct($meal)
    {
        $this->meal = $meal;
    }

    public function getDescription()
    {
        return (string) $this->meal->getDescription() . ", with Coke";
    }

    public function cost()
    {
        return (float) $this->meal->cost() + 2.00;
    }
} 