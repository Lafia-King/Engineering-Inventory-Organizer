<html>
<head>
	<link rel="stylesheet" type="css" href="css/bootstrap.css">
</head> 
<body>
<?php
		/**
		*Include the view_equipment class and use an instance of it to display equipment information
		*/
	include_once("view_equipment.php");
	
		$newView = new view_equipment();
		$newView->getEquipment();		
		$row = $newView->fetch();
		
			echo ("<table class='table table-condensed table-hover table-bordered'>");
			echo("<tr><th>Name</th>
				  <th>Equipment ID</th>
				  <th>Category ID</th>
				  <th>Storage Location</th>
				  <th>Current Condition</th>
				  <th>Label</th>
				  <th>Borrow Status</th> </tr> ");
					
			while ($row) {
				$x = $row['id'];
				echo ("<tr><td>");
				echo ( "<a href = 'display_single_equipment.php?id=$x'>".  $row['name']." </a>");
				echo ("</td>");
				echo ("<td>");
				echo $row["equipment_id"];
				echo ("</td>");
				echo ("<td>");
				echo $row["category_id"];
				echo ("</td>");
				echo ("<td>");
				echo $row["storage_location"];
				echo ("</td>");
				echo ("<td>");
				echo $row["current_condition"];
				echo ("</td>");
				echo ("<td>");
				echo $row["label"];
				echo ("</td>");
				echo ("<td>");
				echo $row["borrow_status"];
				echo ("</td></tr>");
				$row = $newView->fetch();
			}
			echo ("</table>");
		
?>
</body> 
</html>