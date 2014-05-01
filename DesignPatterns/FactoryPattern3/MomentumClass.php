<?php
/**
 * Created by michaelwatts
 * Date: 01/05/2014
 * Time: 09:11
 */

namespace DesignPatterns\FactoryPattern3;


class MomentumClass extends CharacterFactory {

    public function setMomentum($momentum)
    {
        return $momentum;
    }

    public function setName($name)
    {
        return $name;
    }

    public function setWeapon($weapon)
    {
        return $weapon;
    }

    public function setAccess($access)
    {
        return $access;
    }

    public function momentumFunction()
    {
        $updated_function = "Momentum function called here";
        return $this->setMomentum($updated_function);
    }

} 