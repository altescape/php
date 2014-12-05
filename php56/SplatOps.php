<?php
/**
 * Created by michaelwatts
 * Date: 05/12/14
 * Time: 15:59
 */

namespace php56;


class SplatOps {

    public function add($a,$b,$c) {
        return $a + $b + $c;
    }

    public function lotteryBalls(...$balls) {
        $result = "";
        foreach($balls as $ball) {
            $result .= $ball . " ";
        }
        return trim($result);
    }

    public function plop($command) {
        echo "now I'm..." . $command;
    }

    public function powerPlantSettings(...$commands) {
        // do something . . .
        $result = '';
        foreach($commands as $command) {
            $result .= "Now I'm..." . $command . PHP_EOL;
        }
        return $result;
    }

}

$test = new SplatOps();

$operators = [2,3];
echo $test->add(1,...$operators);

echo PHP_EOL . PHP_EOL;
$balls = [1,2,99,24,72,34,54,67,69,83,101];
var_dump(...$balls);

echo PHP_EOL . PHP_EOL;
echo $test->lotteryBalls(...$balls);

echo PHP_EOL . PHP_EOL;
$homerCommands = [
    "Start reactor 3",
    "Looking at gauge (don't know what it means)",
    "Going to have nap",
    "Saying mmmmm donut",
    "Eat donut",
    "Shut tiingdown reactor 2",
    "Say OOOh",
    "Dump radioactive waste",
];
echo $test->powerPlantSettings(...$homerCommands);

