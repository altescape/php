<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:30
 */

namespace DesignPatterns\DecoratorPattern;

class Bev_Espresso implements BeverageInterface {

    public function getDescription()
    {
        return "Espresso";
    }

    public function cost()
    {
        return 1.99;
    }
}