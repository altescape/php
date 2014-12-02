<?php
/**
 * Created: michaelwatts
 * Date: 29/04/2014
 * Time: 20:08
 */

namespace DesignPatterns\FactoryPattern;


class IPhone implements MobileInterface {

    protected $color;
    protected $title;
    protected $description;

    public function setColor($rgb)
    {
        echo "Colour: $rgb\n";
        $this->color = $rgb;
        return $this;
    }

    public function setDescription($description)
    {
        echo "Description: $description\n";
        $this->description = $description;
        return $this;
    }

    public function addHeadPhones()
    {
        echo "Accessories: Headphones\n";
        return $this;
    }

    public function addCharger()
    {
        echo "Accessories: Charger\n";
        return $this;
    }

    public function setTitle($title)
    {
        echo "Title: " . $title . "\n";
        $this->title = $title;
        return $this;
    }
} 