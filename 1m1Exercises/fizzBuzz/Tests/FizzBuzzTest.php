<?php
/**
 * Created: michaelwatts
 * Date: 09/11/14
 * Time: 13:25
 */

require_once "../FizzBuzz.php";

/**
 * Class FizzBuzzTest
 *
 * Write a program that prints the numbers from 1 to 100.
 * But for multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz".
 * For numbers which are multiples of both three and five print "FizzBuzz".
 * For extra credit, make the minimum and maximum (1 to 100) configurable by the user.
 */

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
	public function setUp(){}
	public function tearDown(){}

	public function testToString()
	{
		$fizzBuzz = new FizzBuzz();
//		echo $fizzBuzz;
	}

	public function testForString()
	{
		$fizzBuzz = new FizzBuzz();
		$findMultiples = $fizzBuzz->findMultiples();
//		print($findMultiples);
	}

	public function testChangeValues()
	{
		$fizzBuzz = new FizzBuzz(5, 333);
		$findMultiples = $fizzBuzz->findMultiples();
		print($findMultiples);
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testInvalidValues()
	{
		$fizzBuzz = new FizzBuzz('asd', 2);
		$findMultiples = $fizzBuzz->findMultiples();
		print($findMultiples);
		$this->assertType('InvalidArgumentException', $findMultiples);
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testInvalidRange()
	{
		$fizzBuzz = new FizzBuzz(10, 2);
		$findMultiples = $fizzBuzz->findMultiples();
		print($findMultiples);
		$this->assertType('InvalidArgumentException', $findMultiples);
	}

}
 