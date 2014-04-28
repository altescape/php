<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 09:21
 */

namespace decorator_pattern;

interface BeverageInterface
{
    public function getDescription();

    public function cost();
}