<?php

/**
 * PHP version 7.1
 *
 * @package slashdash\calc
 */

namespace Tests;

use \AM\Slashdash\Calc;
use \PHPUnit\Framework\TestCase;

/**
 * Calc test
 *
 * @author  Andrey Mashukov <a.mashukoff@gmail.com>
 * @version SVN: $Date$ $Revision$
 * @link    $HeadURL$
 */

class CalcTest extends TestCase
    {

	/**
	 * Prepare data for testing
	 *
	 * @return void
	 */

	public function setUp()
	    {
	    } //end setUp()


	/**
	 * Tear down test data
	 *
	 * @return void
	 */

	public function tearDown()
	    {
	    } //end tearDown()


	/**
	 * Should allow to calculate sum
	 *
	 * @return void
	 */

	public function testShouldAllowToCalculateSum()
	    {
		$calc   = new Calc();
		$result = $calc->sum(1, 5);
		$this->assertEquals(6, $result);
	    } //end testShouldAllowToCalculateSum()


    } //end class

?>
