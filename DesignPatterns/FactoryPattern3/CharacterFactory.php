<?php
/**
 * Created: michaelwatts
 * Date: 01/05/2014
 * Time: 00:07
 */

namespace DesignPatterns\FactoryPattern3;


abstract class CharacterFactory implements CharacterInterface {

    public function create($name, $weapon, $momentum, $access)
    {
        return new Character($name, $weapon, $momentum, $access);
    }
}