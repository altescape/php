<?php

class Warrior
{

    public $name = "";
    public $weapon = "";
    public $horse = "";
    public $battle = "";

    public function nameKnight($argument1)
    {
        $this->name = $argument1;
        return "Hi, my name is " . $argument1;
    }

    public function equipKnight($argument1)
    {
        $this->weapon = $argument1;
        return "I now have a " . $argument1;
    }

    public function giveSteed($argument1)
    {
        $this->horse = $argument1;
        return "My horse is " . $argument1;
    }

    public function sendToBattle($argument1)
    {
        $this->battle = $argument1;
        return $this->battle;
    }
}
