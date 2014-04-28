<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:26
 */

namespace decorator_pattern;

require_once "BeverageInterface.php";

abstract class SizeDecorator implements BeverageInterface
{
    abstract public function getDescription();
}