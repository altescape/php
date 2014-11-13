<?php
/**
 * Created by michaelwatts
 * Date: 10/11/2014
 * Time: 16:37
 */

class RecursiveNumber
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

//$recursion = new RecursiveNumber();
//$recursion->recursiveFunction(5);

class EmptyHandBag
{
    public $table = [];

    public function emptyThingsOut($items, $table)
    {
        $tableCopy = $table;
        $itemsCopy = $items;

//        var_dump(['BAG' => $itemsCopy]);
//        var_dump(['TABLE' => $table]);

        echo 'Emptying bag onto table.' . PHP_EOL;
        echo 'Bag contains: ' . implode(', ', $itemsCopy) . PHP_EOL;
        echo 'Table has on it: ' . implode(', ', $tableCopy) . PHP_EOL  . PHP_EOL;

        if (count($itemsCopy) < 0)
            throw new InvalidArgumentException('Cannot remove no items');

        if (count($itemsCopy) == 0) {
            return $itemsCopy;

        } else {
            $tableCopy[] = array_shift($itemsCopy);
            sleep(2);
            return $this->emptyThingsOut($itemsCopy, $tableCopy);
        }

    }
}

$emptyBag = new EmptyHandBag();
$emptyBag->emptyThingsOut(['purse', 'lipstick', 'tissue', 'cough sweet'], $emptyBag->table);