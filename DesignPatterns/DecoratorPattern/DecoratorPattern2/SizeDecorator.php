<?php
/**
 * Created: michaelwatts
 * Date: 28/04/2014
 * Time: 20:28
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern2;


abstract class SizeDecorator implements MealInterface
{
    abstract public function getDescription();
} 