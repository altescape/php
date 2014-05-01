<?php
/**
 * Created: michaelwatts
 * Date: 28/04/2014
 * Time: 20:28
 */

namespace DesignPatterns\DecoratorPattern2;


abstract class DrinksDecorator implements MealInterface
{
    abstract public function getDescription();
} 