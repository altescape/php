<?php
/**
 * Created: michaelwatts
 * Date: 07/05/2014
 * Time: 23:43
 */

namespace DesignPatterns\FactoryPattern4;


class PizzaFactory {

    function __construct($type)
    {
        switch($type) {
            case "NY Cheese" :
                return new NyPizzaCheese();
                break;
            case "Chicago Ham" :
                return new ChPizzaHam();
                break;
            default :
                die("pizza not found");
        }
    }
}