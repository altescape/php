<?php
/**
 * Created: michaelwatts
 * Date: 09/11/14
 * Time: 13:26
 */

class FizzBuzz {

	private $minimum;
	private $maximum;

	function __construct($minimum = 1, $maximum = 100)
	{

		if (!is_int($minimum) || !is_int($maximum)) {
			throw new Exception('You did not enter a valid number. Please enter a valid number');
		}

		if ($minimum >= $maximum) {
			throw new Exception('Minimum greater than maximum. Set number for minimum to be less than the maximum.');
		}

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
	 * Returns an array of the results
	 *
	 * @todo Needs cleaning/optimising I feel, as FIZZBUZZ shouldn't be necessary because FIZZ and BUZZ already there.
	 *
	 * But then does it make things more complicated if an update later requires
	 * for instance a change to FIZZ, BUZZ, FIZZFLOP???
	 *
	 * @return array
	 */
	public function findMultiples()
	{
		$anArray = [];

		for($i = $this->minimum; $i <= $this->maximum; $i++) {
			if ($this->isNumberMultipleOf($i, 3) && $this->isNumberMultipleOf($i, 5))
				$anArray[] = 'FIZZBUZZ';

			else if ($this->isNumberMultipleOf($i, 3))
				$anArray[] = 'FIZZ';

			else if ($this->isNumberMultipleOf($i, 5))
				$anArray[] = 'BUZZ';

			else $anArray[] = $i;
		}

		return $anArray;
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return implode(',', $this->findMultiples());
	}

}