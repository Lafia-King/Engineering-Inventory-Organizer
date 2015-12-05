<?php

/**
 * author: Phoebe Priscilla Amoako
 * date: 5/12/2015
 * description: A test class for viewEquipment.php
 */

include_once("viewEquipment.php");

class TestviewEquipment extends PHPUnit_Framework_TestCase
{
	//Testing Constructor
	public function testviewEquipment()
	{
		$viewEquipment = new viewEquipment();
		$this -> assertEquals(true, $viewEquipment->er_code_prefix=1000);
		$this -> assertEquals(true, $viewEquipment->link=false);
		$this -> assertEquals(true, $viewEquipment->result=false);
		return $viewEquipment;
	}
	
	//Testing getEquipment()
	public function testgetEquipment()
	{
		$this -> assertEquals(true, $viewEquipment->getEquipment());
		return $viewEquipment;
	}
	
	//Testing getSingleEquipment($id)
	public function testgetSingleEquipment()
	{
		$id = 1;
		$this -> assertEquals(true, $viewEquipment->getSingleEquipment($id));
		return $viewEquipment;
	}
	
}


?>