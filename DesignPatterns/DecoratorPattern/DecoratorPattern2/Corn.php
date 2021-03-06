<?php
/**
 * Created: michaelwatts
 * Date: 28/04/2014
 * Time: 20:31
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern2;


class Corn extends SidesDecorator
{
    public $meal;

    public function __construct($meal)
    {
        $this->meal = $meal;
    }

    public function getDescription()
    {
        return (string) $this->meal->getDescription() . ", with corn on the cob";
    }

    public function cost()
    {
        return (float) $this->meal->cost() + 1.00;
    }
} 