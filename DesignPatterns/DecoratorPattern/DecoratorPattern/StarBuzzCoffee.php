<?php
/**
 * Created by michaelwatts
 * Date: 28/04/2014
 * Time: 10:15
 *
 * Using Decorator Pattern for Starbuzz Coffee orders
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern;

use DesignPatterns\DecoratorPattern\DecoratorPattern\Condiments\Cnd_ChocSyrup;
use DesignPatterns\DecoratorPattern\DecoratorPattern\Condiments\Cnd_FoamedMilk;
use DesignPatterns\DecoratorPattern\DecoratorPattern\Condiments\Cnd_HotWater;
use DesignPatterns\DecoratorPattern\DecoratorPattern\Condiments\Cnd_SteamedMilk;
use DesignPatterns\DecoratorPattern\DecoratorPattern\Condiments\Cnd_WhippedCream;

use DesignPatterns\DecoratorPattern\DecoratorPattern\Roasts\Bean_LightRoast;
use DesignPatterns\DecoratorPattern\DecoratorPattern\Roasts\Bean_MediumRoast;
use DesignPatterns\DecoratorPattern\DecoratorPattern\Roasts\Bean_DarkRoast;

use DesignPatterns\DecoratorPattern\DecoratorPattern\Sizes\Sze_Small;
use DesignPatterns\DecoratorPattern\DecoratorPattern\Sizes\Sze_Medium;
use DesignPatterns\DecoratorPattern\DecoratorPattern\Sizes\Sze_Large;
use DesignPatterns\DecoratorPattern\DecoratorPattern\Sizes\Sze_SuperMassive;

require_once '../../../loader.php';

/**
 *
 *
 *                            WELCOME TO
 *
 * ███████╗████████╗ █████╗ ██████╗ ██████╗ ██╗   ██╗███████╗███████╗
 * ██╔════╝╚══██╔══╝██╔══██╗██╔══██╗██╔══██╗██║   ██║╚══███╔╝╚══███╔╝
 * ███████╗   ██║   ███████║██████╔╝██████╔╝██║   ██║  ███╔╝   ███╔╝
 * ╚════██║   ██║   ██╔══██║██╔══██╗██╔══██╗██║   ██║ ███╔╝   ███╔╝
 * ███████║   ██║   ██║  ██║██║  ██║██████╔╝╚██████╔╝███████╗███████╗
 * ╚══════╝   ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═╝╚═════╝  ╚═════╝ ╚══════╝╚══════╝
 *
 *               _____ _____ _____ _____ _____ _____
 *              |     |     |   __|   __|   __|   __|
 *              |   --|  |  |   __|   __|   __|   __|
 *              |_____|_____|__|  |__|  |_____|_____|
 *
 *
 *                                     Hi, What is your order?
 *                                 ___   /
 *                               .'_#_`.
 *                              |[o o]|
 *                          ooO--(_)--Ooo-
 *
 *
 * StarBuzz Coffee is a coffeeshop chain
 *
 *
 * Class StarBuzzCoffee
 * Builds the orders
 * @package decorator_pattern
 */
class StarBuzzCoffee
{
    function __construct()
    {
    }
}
//new StarBuzzCoffee();

final class FlatWhite
{
    function __construct()
    {
        $beverage = new Bean_DarkRoast();
        $beverage = new Shot_Espresso($beverage);
        $beverage = new Shot_Espresso($beverage);
        $beverage = new Cnd_SteamedMilk($beverage);
        $beverage = new Sze_Small($beverage);

        echo($beverage->getDescription() . " $" . $beverage->cost()) . PHP_EOL;
    }
}
// Order Flat White
new FlatWhite();

final class Espresso
{
    function __construct()
    {
        $beverage = new Bean_MediumRoast();
        $beverage = new Shot_Espresso($beverage);
        $beverage = new Sze_Small($beverage);

        echo($beverage->getDescription() . " $" . $beverage->cost()) . PHP_EOL;
    }
}
// Order Espresso
new Espresso();

final class CaffeLatte
{
    function __contruct()
    {
        $beverage = new Bean_LightRoast();
        $beverage = new Shot_Espresso($beverage);
        $beverage = new Cnd_SteamedMilk($beverage);
        $beverage = new Cnd_FoamedMilk($beverage);
        $beverage = new Sze_Medium($beverage);

        echo($beverage->getDescription() . " $" . $beverage->cost()) . PHP_EOL;
    }
}
// Order Café Latte
new CaffeLatte();

final class CaffeMocha
{
    function __construct()
    {
        $beverage = new Bean_DarkRoast();
        $beverage = new Shot_Espresso($beverage);
        $beverage = new Cnd_ChocSyrup($beverage);
        $beverage = new Cnd_SteamedMilk($beverage);
        $beverage = new Cnd_WhippedCream($beverage);
        $beverage = new Sze_SuperMassive($beverage);

        echo($beverage->getDescription() . " $" . $beverage->cost()) . PHP_EOL;
    }
}
// Order Caffé Mocha
new CaffeMocha();

final class Americano
{
    function __construct()
    {
        $beverage = new Bean_MediumRoast();
        $beverage = new Shot_Espresso($beverage);
        $beverage = new Cnd_HotWater($beverage);
        $beverage = new Cnd_HotWater($beverage);
        $beverage = new Cnd_HotWater($beverage);
        $beverage = new Sze_Large($beverage);

        echo($beverage->getDescription() . " $" . $beverage->cost()) . PHP_EOL;
    }
}
// Order Americano
new Americano();

