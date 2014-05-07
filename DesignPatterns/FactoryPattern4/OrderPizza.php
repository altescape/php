<?php
/**
 * Created: michaelwatts
 * Date: 07/05/2014
 * Time: 23:38
 */

namespace DesignPatterns\FactoryPattern4;

require_once '../../loader.php';

class OrderPizza {

    function __construct($order)
    {
        $pizza = new PizzaFactory($order);
        return (new PizzaStore($pizza))->createPizza();
    }
}

new OrderPizza("NY Cheese");