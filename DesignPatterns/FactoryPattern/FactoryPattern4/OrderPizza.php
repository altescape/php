<?php
/**
 * Created: michaelwatts
 * Date: 07/05/2014
 * Time: 23:38
 */

namespace DesignPatterns\FactoryPattern4;

require_once '../../loader.php';

class OrderPizza1 {

    function __construct()
    {
        return new PizzaStore( (new NyPizzaCheese())->makePizza() );
    }
}

class OrderPizza2 {

    function __construct()
    {
        return new PizzaStore((new ChPizzaHam())->makePizza());
    }
}

$order1 = new OrderPizza1();
$order2 = new OrderPizza2();