<?php
/**
 * Created: michaelwatts
 * Date: 29/04/2014
 * Time: 21:23
 */

namespace DesignPatterns\FactoryPattern2;

class AutomobileFactory
{
    public static function create($make, $model)
    {
        return new AutoMobile($make, $model);
    }
}