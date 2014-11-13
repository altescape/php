<?php
/**
 * Created by michaelwatts
 * Date: 11/11/2014
 * Time: 09:23
 */

class Recursion2
{

    public $field = [];
    public static $statProperty = "Im a static property";

    public function plantTree($name = "oak")
    {
        $this->field[] = $name;
    }

    // This is our recursive function
    public function clearField($tree)
    {

        $fieldCopy = $this->field;
        $treeCopy = $tree;

        // sleep(1);
        $removedTree = (isset($fieldCopy[0])) ? 'Removing...' . $fieldCopy[0] : 'There are no trees left. Stopping work now.';
        echo 'Clearing field 1 tree at a time. ' . $removedTree . PHP_EOL;
        echo $this . PHP_EOL . PHP_EOL;

        if (count($fieldCopy) < 0) {
            throw new InvalidArgumentException('Cannot be less than zero');
        }

        if (count($fieldCopy) == 0)
            return $treeCopy;

        else
            array_shift($this->field);
            return $this->clearField(1);

    }

    public function whatsInField()
    {
        return $this->field;
    }

    public function __toString()
    {
        return implode(', ', $this->whatsInField());
    }

    public static function staticMethod()
    {
        return "Im a static function";
    }

    public static function getInstance()
    {
        return new Recursion2();
    }

}

$planting = new Recursion2();

echo 'Our field is bare, let\'s plant something...' . PHP_EOL . PHP_EOL;
$planting->plantTree();
$planting->plantTree('Ash');
$planting->plantTree('Willow');
$planting->plantTree();

echo 'In our field there are now...' . PHP_EOL;
echo $planting . PHP_EOL . PHP_EOL;

$planting->clearField(count($planting->whatsInField()));

echo 'Our field is bare again.' . PHP_EOL . PHP_EOL;

// ======================

echo Recursion2::staticMethod() . PHP_EOL;
echo Recursion2::$statProperty . PHP_EOL . PHP_EOL;

var_dump(Recursion2::getInstance());

$new_planting = Recursion2::getInstance();

$new_planting->plantTree();
$new_planting->plantTree('Beech');
$new_planting->plantTree('Silver Birch');
$new_planting->plantTree('Apple');

echo 'In our field there are now...' . PHP_EOL;
echo $new_planting . PHP_EOL . PHP_EOL;

var_dump(Recursion2::getInstance());