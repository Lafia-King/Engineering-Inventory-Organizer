
<?php
//InventoryDb class
/**
 * @author Kwadwo Busumtwi
 * @author Kwadwo Busumtwi <kwadwo.busumtwi@ashesi.edu.gh>
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
		if (isset($_GET['equipment_id'])){
		global $con;
		$e_id=$_GET['equipment_id'];
		$user_id=$_GET['id'];
		$date_booked=$_GET['date_booked'];
		$date_returned=$_GET['date_returned'];

		
		$check_borrowed_equipment="select user_id,equipment_id from borrowed_equipment,user,equipment  where equipment_id=$e_id and user.id=$user_id ";

		
		$run_check=mysqli_query($con,$check_borrowed_equipment);
	

        

     
		// $product_brand=$row_pro['product_brand'];
		
		if(mysqli_num_rows($run_check)>0){
		
		echo"";
		}
		
		else{
          
			
		$insert_borrowed_equipment="insert into borrowed_equipment (equipment_id,user_id,date_borrowed,return_date) values ('$e_id,$user_id','$date_booked','$date_returned')";
		$run_pro = mysqli_query($con,$insert_borrowed_equipment);
		
		echo "<script>window.open('bookings.php','_self')</script>";
		echo "<script>alert('You have checked out this equipment for this student')</script>";
		}
		
		}
		
		
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

			$query="select * from equipment";
			$get_tools= mysqli_query($con,$query);

			while($row_tools=mysqli_fetch_array($get_tools)){
		$tool_id=$row_tools['id'];
		$manufacturer_id=$row_tools['manufacturer_id'];
		$tool_name=$row_tools['name'];
		$date_created=$row_tools['date_created'];
		echo"<tr><td>";
		echo "$tool_name</td><td><a href='book_tool.php?tool_id=$tool_id'>Book Tool</a></td>";
		echo"</tr>";
		echo "<br>";
		}
		}



		//_______List of items____//
		function list_borrowed_equipment(){
			global $con;

			$query="select * from equipment where borrow_status = 'Borrowed'";
			$get_tools= mysqli_query($con,$query);

			echo("<div>
        <h2 class='sub-header'>Requests</h2>
        </div>");

    echo ("<table class='table table-condensed table-hover'>");
    echo("<tr><th>ID</th> 
 		  <th>Tool Id</th> 
                  <th>User Id</th>
 		  <th>Date Booked</th> 
                  <th></th>
                   <th></th>
                  </tr> ");

			while($row_tools=mysqli_fetch_array($get_tools)){
		$tool_id=$row_tools['id'];
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

		echo "<script>alert('You have registered tool')</script>";
		echo "<script>window.open('bookings.php','_self')</script>";
		
		}



		}




		//The admin's view of all the bookings that have been made//
		function view_bookings(){
			global $con;
			$query="select tool_id ,equipment.name as toolname,user.name as username,equipment_id ,manufacturer_id,date_booked from booking,equipment,user where equipment_id=tool_id and user.id=booking.user_id ";
			$get_bookings= mysqli_query($con,$query);

			while($row_tools=mysqli_fetch_array($get_bookings)){
		$tool_id=$row_tools['tool_id'];
		$manufacturer_id=$row_tools['manufacturer_id'];
		$tool_name=$row_tools['toolname'];
		$date_booked=$row_tools['date_booked'];
		$user_name=$row_tools['username'];
		echo"<tr><td>";
		echo "$tool_name</td><td><a href='checkout_tool.php?tool_id=$tool_id'>Check Out for student</a></td>";
		echo"</tr>";
		echo "<br>";
		}

		}


//id of the person ,
// return date , 









?>









