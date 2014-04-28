<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 10:15
 *
 * Using Decorator Pattern for Starbuzz Coffee orders
 */

namespace decorator_pattern;

// Beverages
require_once "Bev_Espresso.php";
require_once "Bev_HouseBlend.php";
require_once "Bev_DarkRoast.php";

// Condiments
require_once "Cnd_Mocha.php";
require_once "Cnd_Whip.php";
require_once "Cnd_Soy.php";
require_once "Cnd_SteamedMilk.php";

// Sizes
require_once "Sze_Small.php";
require_once "Sze_Medium.php";
require_once "Sze_Large.php";
require_once "Sze_SuperMassive.php";

/**
 * Class StarBuzzCoffee
 * Builds the orders
 *
 * @package decorator_pattern
 */
class StarBuzzCoffee {

    function __construct()
    {
        echo "\n\n ====================== \n\n";

        $beverage = new Bev_Espresso();
        $beverage = new Sze_Medium($beverage);
        echo "1: " . $beverage->getDescription() . " $" . $beverage->cost();

        echo "\n\n ====================== \n\n";

        $beverage2 = new Bev_HouseBlend();
        $beverage2 = new Cnd_Mocha($beverage2);
        $beverage2 = new Cnd_Mocha($beverage2);
        $beverage2 = new Cnd_Whip($beverage2);
        $beverage2 = new Sze_SuperMassive($beverage2);
        echo "2: " . $beverage2->getDescription() . " $" . $beverage2->cost();

        echo "\n\n ====================== \n\n";

        $beverage3 = new Bev_DarkRoast();
        $beverage3 = new Cnd_Mocha($beverage3);
        $beverage3 = new Cnd_Soy($beverage3);
        $beverage3 = new Cnd_SteamedMilk($beverage3);
        $beverage3 = new Sze_Large($beverage3);
        echo "3: " . $beverage3->getDescription() . " $" . $beverage3->cost();

        echo "\n\n ====================== \n\n";

        $beverage4 = new Bev_Espresso();
        $beverage4 = new Cnd_SteamedMilk($beverage4);
        $beverage4 = new Sze_Small($beverage4);
        echo "4: " . $beverage4->getDescription() . " $" . $beverage4->cost();

        echo "\n\n ====================== \n\n";

    }

}

// Call the order
new StarBuzzCoffee();