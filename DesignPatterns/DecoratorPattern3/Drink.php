<?php
/**
 * Created: michaelwatts
 * Date: 06/11/14
 * Time: 21:56
 */

namespace DesignPatterns\DecoratorPattern3;


class Drink extends DrinksContainerDecorator implements DrinkInterface
{
	public $temperature; 	// descriptor: ice-cold, room-temperature, hot
	public $colour; 		// brown, red, clear
	public $name; 			// tea, coffee, water
	public $condiments; 	// what do we add to it; ie milk, sugar, ice-cubes
	public $container; 		// is it served in a tea cup, beer glass
	public $result;			// what result it has on the drinker, ie. drunk, revives, makes alert, gives strength(??)

	function __construct()
	{

	}

	/**
	 * @return mixed
	 */
	public function colour()
	{
		return $this->colour;
	}

	/**
	 * @return mixed
	 */
	public function condiments()
	{
		return $this->condiments;
	}

	/**
	 * @return mixed
	 */
	public function container()
	{
		return $this->container;
	}

	/**
	 * @return mixed
	 */
	public function name()
	{
		return $this->name;
	}

	/**
	 * @return mixed
	 */
	public function result()
	{
		return $this->result;
	}

	/**
	 * @return mixed
	 */
	public function temperature()
	{
		return $this->temperature;
	}




} 