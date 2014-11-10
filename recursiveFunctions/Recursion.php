<?php
/**
 * Created by michaelwatts
 * Date: 10/11/2014
 * Time: 16:37
 */

class recursiveNumber
{

    public function recursiveFunction($number)
    {
        print($number . PHP_EOL);

        if ($number < 0)
            throw new InvalidArgumentException('Number cannot be less than zero');

        if ($number == 0)
            return 1;

        return $number * $this->recursiveFunction($number - 1);
    }
}

//$recursion = new recursiveNumber();
//$recursion->recursiveFunction(5);

class emptyHandBag
{
    public $table = [];

    public function emptyThingsOut($items, $table)
    {
        $tableCopy = $table;
        $itemsCopy = $items;

        var_dump(['BAG' => $itemsCopy]);
        var_dump(['TABLE' => $table]);

        if (count($itemsCopy) < 0)
            throw new InvalidArgumentException('Cannot remove no items');

        if (count($itemsCopy) == 0) {
            return $itemsCopy;

        } else {
            $tableCopy[] = array_shift($itemsCopy);
            return $this->emptyThingsOut($itemsCopy, $tableCopy);
        }

    }
}

$emptyBag = new emptyHandBag();
$emptyBag->emptyThingsOut(['purse', 'lipstick', 'tissue', 'cough sweet'], $emptyBag->table);