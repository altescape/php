<?php
/**
 * Created: michaelwatts
 * Date: 07/05/2014
 * Time: 23:36
 */

namespace DesignPatterns\FactoryPattern4;


class NyPizzaCheese extends PizzaFactory {

    protected function getType()
    {
        return "New York Cheese Pizza";
    }
}