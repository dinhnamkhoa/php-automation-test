<?php

use PHPUnit\Framework\TestCase;

class StaffTest extends TestCase
{
	public function testReturnsFullName()
	{
		require('Staff.php');

		$staff = new Staff;

		$staff->first_name = "Dinh Nam";
		$staff->last_name = "Khoa";

		$this->assertEquals('Dinh Nam Khoa', $staff->getFullName());
	}
	public function testFullNameIsEmptyByDefault()
	{
		$staff = new Staff;
		$this->assertEquals('', $staff->getFullName());
	}

	/**
	 * @test
	 */
	public function only_first_name()
	{
		$staff = new Staff;
		$staff->first_name ="Khoa";
		$this->assertEquals('Dinh Nam', $staff->getFullName());
	}
}
