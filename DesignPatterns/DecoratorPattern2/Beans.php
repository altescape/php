<?php
/**
 * Created: michaelwatts
 * Date: 28/04/2014
 * Time: 20:31
 */

namespace DesignPatterns\DecoratorPattern2;


class Beans extends SidesDecorator
{
    public $meal;

    public function __construct($meal)
    {
        $this->meal = $meal;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return (string) $this->meal->getDescription() . ", with beans";
    }

    /**
     * @return float
     */
    public function cost()
    {
        return (float) $this->meal->cost() + 1.00;
    }
} 