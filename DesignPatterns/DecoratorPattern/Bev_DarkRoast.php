<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:30
 */

namespace DesignPatterns\DecoratorPattern;

class Bev_DarkRoast implements BeverageInterface {

    public function getDescription()
    {
        return "Dark Roast";
    }

    public function cost()
    {
        return .99;
    }
}