<?php
/**
 * Created: michaelwatts
 * Date: 28/04/2014
 * Time: 20:34
 */

namespace DesignPatterns\DecoratorPattern2;

require_once '../../loader.php';

class OrderMeal {

    function __construct()
    {
        echo "\n\n ====================== \n\n";

        $meal = new Burger();
        $meal = new Salad($meal);

        echo "Meal 1: " . $meal->getDescription() . ", £" . $meal->cost();

        echo "\n\n ====================== \n\n";

        $meal2 = new Burger();
        $meal2 = new Salad($meal2);
        $meal2 = new Chips($meal2);
        $meal2 = new Large($meal2);
        $meal2 = new Water($meal2);

        echo "Meal 2: " . $meal2->getDescription() . ", £" . $meal2->cost();

        echo "\n\n ====================== \n\n";

        $meal3 = new KentuckyFriedChicken();
        $meal3 = new Corn($meal3);
        $meal3 = new Beans($meal3);
        $meal3 = new Chips($meal3);
        $meal3 = new Large($meal3);
        $meal3 = new Coke($meal3);

        echo "Meal 2: " . $meal3->getDescription() . ", £" . $meal3->cost();

        echo "\n\n ====================== \n\n";

    }
}

new OrderMeal();