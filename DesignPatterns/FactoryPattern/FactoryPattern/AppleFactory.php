<?php
/**
 * Created: michaelwatts
 * Date: 29/04/2014
 * Time: 20:01
 */

namespace DesignPatterns\FactoryPattern;


class AppleFactory extends FactoryMethod
{
    protected function createMobile()
    {
        $obj = new IPhone();
        $obj->setTitle("iPhone 5S")
            ->setColor("GOLD")
            ->setDescription("Built directly from the Apple factory")
            ->addHeadPhones()
            ->addCharger();
        return $this;
    }
}