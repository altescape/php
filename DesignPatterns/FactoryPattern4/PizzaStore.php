<?php
/**
 * Created: michaelwatts
 * Date: 07/05/2014
 * Time: 23:32
 */

namespace DesignPatterns\FactoryPattern4;


class PizzaStore {

    private $pizza;

    function __construct($pizza)
    {
        $this->pizza = $pizza;
    }

    public function createPizza()
    {
        return $this->pizza;
    }

}