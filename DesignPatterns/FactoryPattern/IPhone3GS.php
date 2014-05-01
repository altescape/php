<?php
/**
 * Created: michaelwatts
 * Date: 29/04/2014
 * Time: 20:08
 */

namespace DesignPatterns\FactoryPattern;


class IPhone3GS implements MobileInterface {

    protected $color;
    protected $title;
    protected $description;

    public function setColor($rgb)
    {
        echo "Color: $rgb\n";
        return $this->color = $rgb;
    }

    public function setTitle($title)
    {
        echo "Title: $title\n";
        return $this->title = $title;
    }

    public function setDescription($description)
    {
        echo "Description: $description\n";
        return $this->description = $description;
    }

    public function addHeadPhones()
    {
        echo "Accessories: Headphones\n";
    }
} 