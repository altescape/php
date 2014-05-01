<?php
/**
 * Created: michaelwatts
 * Date: 01/05/2014
 * Time: 00:05
 */

namespace DesignPatterns\FactoryPattern3;


interface CharacterInterface {
    public function setName($name);
    public function setWeapon($weapon);
    public function setMomentum($momentum);
    public function setAccess($access);
} 