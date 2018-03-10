<?php

/**
 * PHP version 7.1
 *
 * @package slashdash\calc
 */

namespace AM\Slashdash;

/**
 * Calculator
 *
 * @author  Andrey Mashukov <a.mashukoff@gmail.com>
 * @version SVN: $Date$ $Revision$
 * @link    $HeadURL$
 */

class Calc
    {

	/**
	 * Calculate sum
	 *
	 * @param int $a First parameter
	 * @param int $b Second parameter
	 *
	 * @return int Sum
	 */

	public function sum(int $a, int $b):int
	    {
		return ($a + $b);
	    } //end sum()


    } //end class


?>
