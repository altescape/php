<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:34
 */

namespace decorator_pattern;

require_once "SizeDecorator.php";

class Sze_Small extends SizeDecorator {

    public $beverage;

    public function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {

        return $this->beverage->getDescription() . ", Small";
    }

    public function cost()
    {
        return 1 + $this->beverage->cost();
    }

} 