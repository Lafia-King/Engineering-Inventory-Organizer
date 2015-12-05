<?php
/**
 * author: Phoebe Priscilla Amoako
 * date: 5/12/2015
 * description: A test class for viewEquipment.php
 */
include_once("dbconnection.php");

class Testdbconnection extends PHPUnit_Framework_TestCase
{
	//Test connect function
	public function testConnect()
	{
		$db = new dbconnection();
		$this -> assertEquals(true, $db->connect());
		return $db;
	}
	
	//Test query function--query for get all equipment
	public function testQuery($db)
	{
		$this -> assertEquals(true, $db->query("select * from equipment"));
		return $db;
	}
	
	//Test query function--query for get single equipment
	public function testQuery($db)
	{
		$this -> assertEquals(true, $db->query("select * from equipment where id=1"));
		return $db;
	}
	
}


?>