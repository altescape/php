<?php
/**
 * Created: michaelwatts
 * Date: 29/04/2014
 * Time: 20:16
 */

namespace DesignPatterns\FactoryPattern;

require_once '../../loader.php';

class OrderPhone {

    function __construct()
    {
        echo "\n\n ====================== \n\n";

        $mobile1 = new IPhone();
        $mobile1->setTitle("iPhone 5S");
        $mobile1->setColor("GREEN");
        $mobile1->setDescription("Built from its own class");
        $mobile1->addHeadPhones();
        $mobile1->addCharger();

        echo "\n\n ====================== \n\n";

        $mobile2 = new IPhone();
        $mobile2->setTitle("iPhone 3GS");
        $mobile2->setDescription("An oldie buy a still a goody");
        $mobile2->addHeadPhones();

        echo "\n\n ====================== \n\n";

        (new AppleFactory())->create();

        echo "\n\n ====================== \n\n";
    }
}

new OrderPhone;