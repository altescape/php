<?php
/**
 * Created: michaelwatts
 * Date: 01/05/2014
 * Time: 22:31
 */

namespace DesignPatterns\DependancyInjection;


require_once '../../loader.php';

$author = new Author("Michael", "Watts", 10);
$question = new Question("Is 3 a magic number?", $author);

print_r($question);