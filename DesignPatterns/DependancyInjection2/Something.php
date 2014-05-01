<?php
/**
 * Created: michaelwatts
 * Date: 01/05/2014
 * Time: 22:59
 */

namespace DesignPatterns\DependancyInjection2;


class Another {}

/**
 * @property string anotherConfig
 * @property string someConfig
 */
class Third {}

class Something {

    public function __construct(Another $another, Third $third)
    {
        $this->another = $another;
        $this->third = $third;
    }

}

$another = new Another;

$third = new Third;

$third->someConfig = "123";
$third->anotherConfig = "ABC";

$something = new Something($another, $third);

print_r($something);

echo $third->someConfig;