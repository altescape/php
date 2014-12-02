<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:26
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern\Condiments;
use DesignPatterns\DecoratorPattern\DecoratorPattern\BeverageInterface;

abstract class CondimentDecorator implements BeverageInterface
{
    abstract public function getDescription();
}