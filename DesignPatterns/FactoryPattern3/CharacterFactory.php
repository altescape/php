<?php
/**
 * Created: michaelwatts
 * Date: 01/05/2014
 * Time: 00:07
 */

namespace DesignPatterns\FactoryPattern3;


abstract class CharacterFactory {

    public function create()
    {
        return new Character();
    }
}