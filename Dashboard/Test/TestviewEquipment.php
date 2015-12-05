<?php

/**
 * author: Phoebe Priscilla Amoako
 * date: 5/12/2015
 * description: A test class for viewEquipment.php
 */

include_once("viewEquipment.php");

class TestviewEquipment extends PHPUnit_Framework_TestCase
{
<<<<<<< HEAD
	
=======
	public $viewEquipment ;
>>>>>>> 934a72b032f8f09ed632f8db6f752abae59cf199
	//Testing Constructor
	public function testviewEquipment()
	{
		$viewEquipment = new viewEquipment();
		// $this -> assertEquals(true, $viewEquipment->er_code_prefix=1000);
		// $this -> assertEquals(true, $viewEquipment->link=false);
		// $this -> assertEquals(true, $viewEquipment->result=false);
		return $viewEquipment;
	}
	
	//Testing getEquipment
	public function testgetEquipment($viewEquipment)
	{
<<<<<<< HEAD
	 	$this -> assertEquals(true, $viewEquipment->getEquipment());
		return $viewEquipment;
=======
	 	$this -> assertEquals(false, $viewEquipment->getEquipment());
		// return $viewEquipment;
>>>>>>> 934a72b032f8f09ed632f8db6f752abae59cf199
	}
	
	//Testing getSingleEquipment($id)
	public function testgetSingleEquipment($viewEquipment)
	{
		$id = 23;
		$this -> assertEquals(true, $viewEquipment->getSingleEquipment($id));	
	}
	
}


?>