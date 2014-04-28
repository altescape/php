<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:30
 */

namespace decorator_pattern;

require_once "BeverageInterface.php";

class Bev_HouseBlend implements BeverageInterface {

    public function getDescription()
    {
        return "House Blend";
    }

    public function cost()
    {
        return .89;
    }
}