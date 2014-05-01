<?php
/**
 * Created: michaelwatts
 * Date: 29/04/2014
 * Time: 19:58
 */

namespace DesignPatterns\FactoryPattern;


abstract class FactoryMethod
{
    abstract protected function createMobile();

    public function create()
    {
        $obj = $this->createMobile();

        return $obj;
    }

    public function data()
    {
        return $this;
    }
}