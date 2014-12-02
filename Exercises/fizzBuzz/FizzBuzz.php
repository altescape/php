<?php
/**
 * Created: michaelwatts
 * Date: 09/11/14
 * Time: 13:26
 * 
 * FIZZBUZZ
 * 
 * A program that prints the numbers from 1 to 100.
 * - For multiples of three it prints "Fizz" instead of the number.
 * - For multiples of five it print "Buzz".
 * - For numbers which are multiples of both three and five it prints "FizzBuzz".
 * 
 * 
 * USE:
 * 	// With default values of range 1..100: 
 * 	$fizzBuzz = new FizzBuzz();
 * 	echo $fizzBuzz;
 * 
 * 	// To enter your own range: 
 * 	$fizzBuzz = new FizzBuzz(n, n);
 * 	echo $fizzBuzz;
 * 
 * 
 * ERROR CHECKING:
 * - If entering anything other than an integer the program will fail.
 * - If entering a minimum value greater than the maximum value the program will fail.
 */

class FizzBuzz {

	private $minimum;
	private $maximum;

	function __construct($minimum = 1, $maximum = 100)
	{
		if ( !is_int($minimum) || !is_int($maximum) )
			throw new InvalidArgumentException('FizzBuzz class only accepts integers. Input was: '. $minimum . ', ' . $maximum);

		if ($minimum >= $maximum)
			throw new InvalidArgumentException('Minimum number must be be less than maximum number. Input was: '. $minimum . ', ' . $maximum);

		$this->minimum = $minimum;
		$this->maximum = $maximum;
	}

	/**
	 * Returns true if the $number supplied is a multiple of $multiple
	 *
	 * @param $number
	 * @param $multiple
	 * @return bool
	 */
	private function isNumberMultipleOf($number, $multiple)
	{
		$isMultiple = ($number % $multiple != 0) ? false : true;
		return $isMultiple;
	}

	/**
	 * Finds multiples
	 *
	 * @return string
	 */
	public function findMultiples()
	{
		$aString = '';

		for($i = $this->minimum; $i <= $this->maximum; $i++) {

			$fizz = $this->isNumberMultipleOf($i, 3);
			$buzz = $this->isNumberMultipleOf($i, 5);

			if ($fizz)
				$aString .= 'FIZZ';

			if ($buzz)
				$aString .= 'BUZZ';

			if (!($fizz || $buzz))
				$aString .= $i;

			$aString .= PHP_EOL;
		}

		return $aString;
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->findMultiples();
	}

}
