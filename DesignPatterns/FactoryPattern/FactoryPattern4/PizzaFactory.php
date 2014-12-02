<?php
/**
 * Created: michaelwatts
 * Date: 07/05/2014
 * Time: 23:43
 */

namespace DesignPatterns\FactoryPattern4;


abstract class PizzaFactory {

    protected $type;

    abstract protected function getType();

    public function makePizza()
    {
        switch($this->getType()) {
            case "New York Cheese Pizza" :
                print $this->getType() . PHP_EOL;
                return new NyPizzaCheese($this->type);
                break;
            case "Chicago Ham Pizza" :
                print $this->getType() . PHP_EOL;
                return new ChPizzaHam($this->type);
                break;
            default :
                die("pizza not found");
        }
    }
}