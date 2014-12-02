<?php
/**
 * Created: michaelwatts
 * Date: 06/11/14
 * Time: 21:49
 */

namespace DesignPatterns\DecoratorPattern3;

require_once '../../loader.php';

abstract class DrinksContainerDecorator implements DrinkInterface
{

	protected $container;

	public function container(){
		echo $this->container;
	}

	/**
	 * @param mixed $container
	 */
	public function setContainer($container)
	{
		$this->container = $container;
	}

} 