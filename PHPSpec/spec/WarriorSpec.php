<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class WarriorSpec extends ObjectBehavior
{
    function it_initializes_a_new_knight()
    {
        $this->nameKnight("Sir Bernard")->shouldReturn("Hi, my name is Sir Bernard");
    }

    function it_should_equip_knight_with_weapon()
    {
        $this->equipKnight("Long Sword")->shouldReturn("I now have a Long Sword");
    }

    function it_should_give_the_knight_a_steed()
    {
        $this->giveSteed("Horatio")->shouldReturn("My horse is Horatio");
    }

    function it_should_send_knight_to_battle()
    {
        $this->sendToBattle("Farnham")->shouldReturn($this->battle);
    }

    function it_should_get_name_of_battle()
    {
        $this->sendToBattle("Farnham");
        $this->battle->shouldReturn("Farnham");
    }

    function it_should_return_correct_properties()
    {
        $this->nameKnight("Sir Chunkas");
        $this->equipKnight("Big Carrot");
        $this->giveSteed("Donkey");
        $this->sendToBattle("Normandy");

        $this->name->shouldReturn("Sir Chunkas");
        $this->weapon->shouldReturn("Big Carrot");
        $this->horse->shouldReturn("Donkey");
        $this->battle->shouldReturn("Normandy");
    }

    function it_should_have_battle_as_an_object($battle)
    {
        $battle->beADoubleOf('MiddleAge\Battle');
        $battle->getName()->willReturn("Aviemore");

        $this->sendToBattle($battle)->shouldReturn($battle);
    }
}
