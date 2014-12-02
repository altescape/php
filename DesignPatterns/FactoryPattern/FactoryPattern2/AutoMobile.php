<?php
/**
 * Created: michaelwatts
 * Date: 29/04/2014
 * Time: 21:19
 */

namespace DesignPatterns\FactoryPattern2;

class AutoMobile
{
    private $vehicle_make;
    private $vehicle_model;
    private $description;

    function __construct($vehicle_make, $vehicle_model)
    {
        $this->vehicle_make = $vehicle_make;
        $this->vehicle_model = $vehicle_model;
    }

    /**
     * @return string
     */
    public function getMakeAndModel()
    {
        return $this->vehicle_make . ' ' . $this->vehicle_model;
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }


}