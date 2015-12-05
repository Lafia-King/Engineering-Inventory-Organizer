<!--test class for my db.php class-->
<?php
include 'db.php'; 
class db_test extends PHPUnit_Framework_TestCase{


	 public function testCalculate()
    {
        $this->assertEquals(2, 1 + 1);
    }

//Testing the check_out method
	public function test_check_out(){


	}


//    //Testing the view_bookings method
// 	public function test_view_bookings(){
// 	view_bookings()
// }



}



?>