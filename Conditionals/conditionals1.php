<?php
/**
 * Created by michaelwatts
 * Date: 11/11/2014
 * Time: 10:59
 */

$a = false;
$b = true;

var_dump(!($a || $b));  // false

var_dump((!$a || !$b)); // true

/**
 * not (true or false)
 * not true OR or not false
 */