<?php
/**
 * Created: michaelwatts
 * Date: 01/05/2014
 * Time: 20:53
 */

namespace DesignPatterns\FactoryPattern3;


abstract class SpeedDecorator implements CharacterInterface
{
    abstract public function setSpeed($speed);
} 