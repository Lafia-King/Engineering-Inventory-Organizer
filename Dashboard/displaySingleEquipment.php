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
		
		
		
		include("footer.html");
    ?> 