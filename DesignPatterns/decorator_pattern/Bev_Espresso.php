<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:30
 */

namespace decorator_pattern;

require_once "BeverageInterface.php";

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