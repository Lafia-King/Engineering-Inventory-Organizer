
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
			$query="select Product_ID,Product_Name,Product_Description,Quantity, Price from product_table";
			
			return $this->query($query);
		}


//______Alert function_____//
		function alert_an_item(){
			global $con;
			$query="select Product_ID,Product_Name,Product_Description,Quantity, Price from product_table";
			
			return $this->query($query);
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
		echo "<li><a href='#'>$tool_name</a></li>";
		}
		}












?>









