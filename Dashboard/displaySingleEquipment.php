<?php

/** @author Phoebe Priscilla Amoako
	 *@author Phoebe Priscilla Amoako (phoebe.amoako@ashesi.edu.gh)
	 */
	 
		include("header.html");
		echo("<div><h1 style='color:#5f6468;'><b>DASHBOARD</b></h1>"
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
		
		echo ("<table class='table table-condensed table-hover table-bordered'>
					<tr>
						<th>ID:</th>
						<td>$id</td>
					</tr>
					<tr>
						<th>Name:</th>
						<td>$name</td>
					</tr>
					<tr>
						<th>Equipment ID:</th>
						<td>$equipment_id</td>
					</tr>
					<tr>
						<th>Category ID:</th>
						<td>$category_id</td>
					</tr>
					<tr>
						<th>Storage Location:</th>
						<td>$storage_location</td>
					</tr>
					<tr>
						<th>Supplier ID:</th>
						<td>$supplier_id</td>
					</tr>
					<tr>
						<th>Manufacturer ID:</th>
						<td>$manufacturer_id</td>
					</tr>
					<tr>
						<th>Product ID:</th>
						<td>$product_id</td>
					</tr>
					<tr>
						<th>Current Condition:</th>
						<td>$current_condition</td>
					</tr>
					<tr>
						<th>Label:</th>
						<td>$label</td>
					</tr>
					<tr>
						<th>Asset Type:</th>
						<td>$asset_type</td>
					</tr>
					<tr>
						<th>Borrow Status:</th>
						<td>$borrow_status</td>
					</tr>
					<tr>
						<th>Date Created:</th>
						<td>$date_created</td>
					</tr>					
			</table>");
		
		include("footer.html");
    ?> 