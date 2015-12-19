<?php


/**
 * @author Chloe Acheampong 
 * @copyright 2015
 */

 require ('supplier_model.php');
 
 class supplierTest extends PHPUnit_Framework_TestCase{

 	 public function setUp()
 	{
 		# code...
 		$c = new supplier();
 	}
    
    public function testAddsupplier(){
        $c = new Supplier();
        $result = $c->addSupplier("Test","asante@gmail.com","023556444556");
        $this->assertEquals(true, $result);
        
    }

    public function testgetsupplierById(){
        $c = new Supplier();
        $result = $c->getSupplierById(1);
        $this->assertEquals(true, $result);
        
    }

    public function testUpdatesupplier(){
        $c = new Supplier();
        $result = $c->updatesupplier(2,"Test","test@gmail.com","023556444556");
        $this->assertEquals(true, $result);
        
    }
 }


?>
