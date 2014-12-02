<?php
/**
 * Created: michaelwatts
 * Date: 28/04/2014
 * Time: 20:24
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern2;


interface MealInterface
{
    public function getDescription();

    public function cost();
}