<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:34
 */

namespace decorator_pattern;

require_once "CondimentDecorator.php";

class Cnd_Mocha extends CondimentDecorator {

    public $beverage;

    public function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {

        return $this->beverage->getDescription() . ", Mocha";
    }

    public function cost()
    {
        return .2 + $this->beverage->cost();
    }

}