<?php

/** @author Phoebe Priscilla Amoako
	 *@author Phoebe Priscilla Amoako (phoebe.amoako@ashesi.edu.gh)
	 */
	 
		include("header.html");
		echo("<div><h1 style='color:#5f6468;'><b>DASHBOARD</b></h1>"
		. "<em>the first priority information</em>"
		. "<hr></div>");
		
			include_once("viewEquipment.php");
		
		$view = new viewEquipment();
		$view -> getSingleEquipment($_REQUEST['id']);		
		$row = $view->fetch();
		
		$id = $row["id"];
		$name = $row["name"];
		$equipment_id= $row["equipment_id"];
		$category_id= $row["category_id"];
		$storage_location= $row["storage_location"];
		$supplier_id= $row["supplier_id"];
		$manufacturer_id= $row["manufacturer_id"];
		$product_id= $row["product_id"];
		$current_condition= $row["current_condition"];
		$label= $row["label"];
		$asset_type= $row["asset_type"];
		$borrow_status= $row["borrow_status"];
		$date_created= $row["date_created"];
		
		echo ("<table>
					<tr>
						<td>ID:</td>
						<td>$id</td>
					</tr>
					<tr>
						<td>Name:</td>
						<td>$name</td>
					</tr>
					<tr>
						<td>Equipment ID:</td>
						<td>$equipment_id</td>
					</tr>
					<tr>
						<td>Category ID:</td>
						<td>$category_id</td>
					</tr>
					<tr>
						<td>Storage Location:</td>
						<td>$storage_location</td>
					</tr>
					<tr>
						<td>Supplier ID:</td>
						<td>$supplier_id</td>
					</tr>
					<tr>
						<td>Manufacturer ID:</td>
						<td>$manufacturer_id</td>
					</tr>
					<tr>
						<td>Product ID:</td>
						<td>$product_id</td>
					</tr>
					<tr>
						<td>Current Condition:</td>
						<td>$current_condition</td>
					</tr>
					<tr>
						<td>Label:</td>
						<td>$label</td>
					</tr>
					<tr>
						<td>Asset Type:</td>
						<td>$asset_type</td>
					</tr>
					<tr>
						<td>Borrow Status:</td>
						<td>$borrow_status</td>
					</tr>
					<tr>
						<td>Date Created:</td>
						<td>$date_created</td>
					</tr>					
			</table>");
		
		include("footer.html");
    ?> 