<?php


/**
 * @author Chloe Acheampong 
 * @copyright 2015
 */

 require ('manufacturer_model.php');
 
 class manufacturerTest extends PHPUnit_Framework_TestCase{

 	 public function setUp()
 	{
 		# code...
 		$c = new Manufacturer();
 	}
    
    public function testAddManufacturer(){
        $c = new Manufacturer();
        $result = $c->addManufacturer("Test","asante@gmail.com","023556444556","www.hum.com","Ghana");
        $this->assertEquals(true, $result);
        
    }

    public function testgetManufacturerById(){
        $c = new Manufacturer();
        $result = $c->getManufacturerById(2);
        $this->assertEquals(true, $result);
        
    }

    public function testUpdateManufacturer(){
        $c = new Manufacturer();
        $result = $c->updateManufacturer(2,"Test","test@gmail.com","023556444556","www.hum.com","Ghana");
        $this->assertEquals(true, $result);
        
    }
 }


?>
