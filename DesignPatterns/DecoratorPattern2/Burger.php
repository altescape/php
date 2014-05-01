<?php
/**
 * Created: michaelwatts
 * Date: 28/04/2014
 * Time: 20:27
 */

namespace DesignPatterns\DecoratorPattern2;


class Burger implements MealInterface
{
    /**
     * @return string
     */
    public function getDescription()
    {
        return "Burger";
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 1.99;
    }
}