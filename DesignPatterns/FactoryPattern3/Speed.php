<?php
/**
 * Created: michaelwatts
 * Date: 01/05/2014
 * Time: 20:58
 */

namespace DesignPatterns\FactoryPattern3;


class Speed extends SpeedDecorator
{
    public $character;

    protected $name;
    protected $weapon;
    protected $momentum;
    protected $access;
    protected $speed;

    function __construct($character)
    {
        $this->character = $character;
    }

    function __toString()
    {
        $string = "Name: $this->name\n";
        $string .= "Weapon: $this->weapon\n";
        $string .= "Momentum: $this->momentum\n";
        $string .= "Secret Passage: $this->access\n";
        $string .= "Speed: $this->speed\n";

        return $string;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setWeapon($weapon)
    {
        $this->character->setWeapon($weapon);
    }

    public function setMomentum($momentum)
    {
        $this->character->setMomentum($momentum);
    }

    public function setAccess($access)
    {
        $this->character->setAccess($access);
    }

    public function setSpeed($speed)
    {
        $this->character->setSpeed($speed);
    }

} 