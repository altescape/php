<?php
/**
 * Created by michaelwatts
 * Date: 02/12/14
 * Time: 17:11
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern\Sizes;
use DesignPatterns\DecoratorPattern\DecoratorPattern\BeverageInterface;

abstract class SizeDecorator implements BeverageInterface
{
    abstract public function getDescription();
}