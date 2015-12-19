<?php


/**
 * @author Benedicta Amo Bempah
 * 
 */

 require ('searchClass.php');
 
 class testClass extends PHPUnit_Framework_TestCase{

 	 public function setUp()
 	{
 		# code...
 		$c = new searchClass();
 	}
    
    public function testSearchEquipments(){
        $c = new searchClass();
        $result = $c->searchEquipments("goggles");
        $this->assertEquals(true, $result);
        
    }

   
 }


?>