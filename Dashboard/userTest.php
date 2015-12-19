<?php


/**
 * author Jessica Sugru Ali 
 * 
 */

 require ('user.php');
 
 class userTest extends PHPUnit_Framework_TestCase{

 	 public function setUp()
 	{
 		# code...
 		$c = new User();
 	}
    
    public function testAddUser(){
        $c = new User();
        $result = $c->addUser("kweku","kweku2","kweku2","kweku.mensah@gmail.com","+233242680080","admin");
        $this->assertEquals(true, $result);
        
    }

    public function testgetUserById(){
        $c = new Userer();
        $result = $c->getUserById(2);
        $this->assertEquals(true, $result);
        
    }

    public function testUpdateUser(){
        $c = new User();
        $result = $c->updateUser("kweku","kweku2","kweku2","kweku.mensah@gmail.com","+233242680080","admin");
        $this->assertEquals(true, $result);
        
    }
 }


?>