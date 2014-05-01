<?php
/**
 * Created: michaelwatts
 * Date: 01/05/2014
 * Time: 00:13
 */

namespace DesignPatterns\FactoryPattern3;

require_once '../../loader.php';

$crt1 = (new Character())
    ->setName("Serf")
    ->setWeapon("Knives")
    ->setMomentum(10)
    ->setAccess("Barrels");

echo $crt1;

echo "\n^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\n";

$crt2 = (new Character())
    ->setName("Knight")
    ->setWeapon("Axes")
    ->setMomentum(0)
    ->setAccess("Suits of armour");

echo $crt2;

echo "\n^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\n";

$crt3 = (new Character())
    ->setName("Wizard")
    ->setWeapon("Wizard's Fire")
    ->setMomentum(5)
    ->setAccess("Bookcases");

echo $crt3;