<?php
/**
 * Created: michaelwatts
 * Date: 01/05/2014
 * Time: 00:13
 */

namespace DesignPatterns\FactoryPattern3;

require_once '../../loader.php';

$serf = (new Character())
    ->setName("Serf")
    ->setWeapon("Knives")
    ->setMomentum(10)
    ->setAccess("Barrels");

echo $serf;

echo "\n^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\n";

$knight = (new Character())
    ->setName("Knight")
    ->setWeapon("Axes")
    ->setMomentum((new MomentumClass())->momentumFunction())
    ->setAccess("Suits of armour");

echo $knight;

echo "\n^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\n";

$wizard = (new Character())
    ->setName("Wizard")
    ->setWeapon("Wizard's Fire")
    ->setMomentum(5)
    ->setAccess("Bookcases");

echo $wizard;