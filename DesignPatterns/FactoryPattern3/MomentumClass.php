<?php
/**
 * Created by michaelwatts
 * Date: 01/05/2014
 * Time: 09:11
 */

namespace DesignPatterns\FactoryPattern3;


class MomentumClass extends CharacterFactory {

    /**
     * @param $momentum
     * @return mixed
     */
    public function setMomentum($momentum)
    {
        return $momentum;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name)
    {
        return $name;
    }

    /**
     * @param $weapon
     * @return mixed
     */
    public function setWeapon($weapon)
    {
        return $weapon;
    }

    /**
     * @param $access
     * @return mixed
     */
    public function setAccess($access)
    {
        return $access;
    }

    # Added functionality
    /**
     * @return mixed
     */
    public function momentumFunction()
    {
        $updated_function = "Momentum function called here";
        return $this->setMomentum($updated_function);
    }

} 