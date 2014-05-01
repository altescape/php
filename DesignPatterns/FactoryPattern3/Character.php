<?php
/**
 * Created: michaelwatts
 * Date: 01/05/2014
 * Time: 00:09
 */

namespace DesignPatterns\FactoryPattern3;


class Character extends CharacterFactory {

    protected $name;
    protected $weapon;
    protected $momentum;
    protected $access;
    protected $speed;

    function __toString()
    {
        $string = "Name: $this->name\n";
        $string .= "Weapon: $this->weapon\n";
        $string .= "Momentum: $this->momentum\n";
        $string .= "Secret Passage: $this->access\n";
        $string .= "Speed: $this->speed\n";

        return $string;
    }

    /**
     * @param mixed $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param mixed $weapon
     * @return $this
     */
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
        return $this;
    }

    /**
     * @param mixed $momentum
     * @return $this
     */
    public function setMomentum($momentum)
    {
        $this->momentum = $momentum;
        return $this;
    }

    /**
     * @param $access
     * @return $this
     */
    public function setAccess($access)
    {
        $this->access = $access;
        return $this;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
        return $this;
    }

}
