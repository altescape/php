<?php
/**
 * Created: michaelwatts
 * Date: 06/11/2014
 * Time: 18:40
 */

namespace DesignPatterns\DecoratorPattern\DecoratorPattern3;

interface DrinkInterface {
	public function temperature(); 	// descriptor: ice-cold, room-temperature, hot
	public function colour(); 		// brown, red, clear
	public function name(); 		// tea, coffee, water
	public function condiments(); 	// what do we add to it; ie milk, sugar, ice-cubes
	public function container(); 	// is it served in a tea cup, beer glass
	public function result();		// what result it has on the drinker, ie. drunk, revives, makes alert, gives strength(??)
}