<?php
/**
 * Created: michaelwatts
 * Date: 06/11/14
 * Time: 21:52
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern3;

require_once '../../../loader.php';

$water = new Drink();

$water->colour = 'clear';
$water->condiments = 'none';
$water->name = 'water';
$water->container = 'glass';
$water->temperature = 'cool';
$water->result = 'revives';

print_r($water);