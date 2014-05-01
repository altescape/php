<?php
/**
 * Created: michaelwatts
 * Date: 28/04/2014
 * Time: 20:27
 */

namespace DesignPatterns\DecoratorPattern2;


class KentuckyFriedChicken implements MealInterface
{
    /**
     * @return string
     */
    public function getDescription()
    {
        return "Kentucky Fried Chicken";
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 2.50;
    }
}