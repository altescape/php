<?php
/**
 * Created: michaelwatts
 * Date: 29/04/2014
 * Time: 21:26
 */

namespace DesignPatterns\FactoryPattern2;

require_once '../../loader.php';

$veyron = AutomobileFactory::create("Bugatti", "Veyron");

$veyron->setDescription("A fast car, normally silver");

print_r($veyron);