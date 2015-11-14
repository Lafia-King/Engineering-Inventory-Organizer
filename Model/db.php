
<?php
//InventoryDb class
/**
 * author: Kwadwo Busumtwi
 * date:13/11/2015
 * description: A root class for all manage classes. This class communicates with DB
 *
 */

$con=mysqli_connect("localhost","root","","inventorydb");

//____Check_In_____//
		function check_in(){
	global $con;
		}



		//____Check_out_____//
		function check_out(){
			global $con;
		}






//____Book an item_____//
		function reserve_an_item(){
			global $con;
			
		}


//______Alert function_____//
		function alert_an_item(){
			global $con;
			
		}


//_______List of items____//
		function list_tools(){
			global $con;

			$query="select * from Tool";
			$get_tools= mysqli_query($con,$query);

			while($row_tools=mysqli_fetch_array($get_tools)){
		$tool_id=$row_tools['tool_id'];
		$manufacturer_id=$row_tools['manufacturer_id'];
		$tool_name=$row_tools['name'];
		$date_created=$row_tools['date_created'];
		echo"<tr><td>";
		echo "$tool_name</td><td><a href='book_tool.php?tool_id=$tool_id'>Book Tool</a></td>";
		echo"</tr>";
		echo "<br>";
		}
		}







//__________User books item____//
//________Method needs to be modified so it takes into perspective login session_________///

		
		function book_tool(){
			global $con;
			if(isset($_GET['tool_id'])){
		
		$tool_id=$_GET['tool_id'];
		
		}

        //SQL query that checks if the tool_id already exists in the bookings
        //If it doesn't allow you to book item has been booked already
		$get_bookings="select * from booking where tool_id=$tool_id";
	
		$run_check=mysqli_query($con,$get_bookings);


		if(mysqli_num_rows($run_check)>0){
		
		echo"";
		}
		
		else{

			
		$insert_booking="insert into booking (id,tool_id,user_id,date_booked) values ('',$tool_id,'',now())";
		$run_pro = mysqli_query($con,$insert_booking);
		
		echo "<script>window.open('bookings.php','_self')</script>";
		echo "<script>alert('You have registered tool')</script>";
		}



		}




		//The admin's view of all the bookings that have been made//
		function view_bookings(){
			global $con;
			$query="select tool.tool_id as toolid,tool.name as toolname,user.name as username,tool.tool_id as toolid,manufacturer_id,date_booked from booking,tool,user where tool.tool_id=booking.tool_id and user.id=booking.user_id ";
			$get_bookings= mysqli_query($con,$query);

			while($row_tools=mysqli_fetch_array($get_bookings)){
		$tool_id=$row_tools['toolid'];
		$manufacturer_id=$row_tools['manufacturer_id'];
		$tool_name=$row_tools['toolname'];
		$date_booked=$row_tools['date_booked'];
		$user_name=$row_tools['username'];
		echo"<tr><td>";
		echo "$tool_name</td><td><a href='book_tool.php?tool_id=$tool_id'>Approve Check Out</a></td>";
		echo"</tr>";
		echo "<br>";
		}

		}










?>









