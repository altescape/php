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

	public function testCount()
	{
		$fizzBuzz = new FizzBuzz();
		echo $fizzBuzz;
	}

	public function testCountArray()
	{
		//$fizzBuzz = new FizzBuzz();
		//var_dump($fizzBuzz->findMultiples());
//		$this->assertTrue($fizzBuzz->count());
	}

	public function test48ShouldBeMultipleOfThree()
	{
		$fizzBuzz = new FizzBuzz();
		$findMultiples = $fizzBuzz->findMultiples();
		$number = 48;
		$multiple = 3;

		$this->assertTrue($number % $multiple == 0);
	}

	public function test48ShouldbeFizz()
	{
		$fizzBuzz = new FizzBuzz();
		$findMultiples = $fizzBuzz->findMultiples();
		$number = 48;
		$multiple = 3;
		$ArrayIndex = $number - 1;

		$this->assertEquals('FIZZ', $findMultiples[$ArrayIndex]);
	}

	public function test50ShouldBeMultipleOfFive()
	{
		$fizzBuzz = new FizzBuzz();
		$findMultiples = $fizzBuzz->findMultiples();
		$number = 50;
		$multiple = 5;

		$this->assertTrue($number % $multiple == 0);
	}

	public function test50ShouldbeBuzz()
	{
		$fizzBuzz = new FizzBuzz();
		$findMultiples = $fizzBuzz->findMultiples();
		$number = 50;
		$multiple = 5;
		$ArrayIndex = $number - 1;

		$this->assertEquals('BUZZ', $findMultiples[$ArrayIndex]);
	}

	public function test50ShouldBeMultipleOfThreeAndFive()
	{
		$fizzBuzz = new FizzBuzz();
		$findMultiples = $fizzBuzz->findMultiples();
		$number = 45;
		$multiple1 = 3;
		$multiple2 = 5;

		$this->assertTrue($number % $multiple1 == 0 && $number % $multiple2 == 0);
	}

	public function test50ShouldbeFizzBuzz()
	{
		$fizzBuzz = new FizzBuzz();
		$findMultiples = $fizzBuzz->findMultiples();
		$number = 45;
		$multiple = 5;
		$ArrayIndex = $number - 1;

		$this->assertEquals('FIZZBUZZ', $findMultiples[$ArrayIndex]);
	}

	public function testForArray()
	{
		$fizzBuzz = new FizzBuzz();
		$findMultiples = $fizzBuzz->findMultiples();
		print_r($findMultiples);
	}

}
 