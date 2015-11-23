<!-- @Author: Phoebe Priscilla Amoako -->
<!-- @Date: 22nd November, 2015 -->

<html>
<head>
<link rel="stylesheet" type="css" href="css/bootstrap.css">
</head> 
<h1><span>Engineering Lab Inventory</span></h1>
<body>

<?php
	//check connection to your database
	$database="inventorydb";	//this database has to exist. 
	$username="root";		//the main admin user of mysql
	$password="";			//use root password of mysql
	$server="localhost";	//name of the server
	
	$link=mysql_connect($server,$username,$password);
	//if result is false, the connection did not open
	if(!$link){	
		echo "Failed to connect to mysql.";
		//display error message from mysql
		echo mysql_error();	
		exit();		//end script
	}
	//select the database to work with using the open connection 
	if(!mysql_select_db($database,$link)){
		echo "Failed to select database.";
		//display error message from mysql
		echo mysql_error();	
		exit();	
	}
	
	//begin running query for equipment info from inventorydb
	$dataset =  mysql_query("select * from equipment", $link);
	if (!$dataset){
		echo "Error";
		echo mysql_error();
		exit();
	}
	
	echo ("<table>");
	echo("<tr><th>Item ID</th>
		  <th>Barcode</th>
		  <th>Name</th>
		  <th>Price</th>
		  <th>Date Bought</th>
		  <th>Maintenance Date</th>
		  <th>Department</th>
		  <th>Location</th>
		  <th>Maufacturer ID</th>
		  <th>Supplier ID</th> </tr> ");
		  
	$row = mysql_fetch_assoc($dataset);	  
	while ($row) {
		echo ("<tr><td>");
		echo $row["item_id"];
		echo ("</td>");
		echo ("<td>");
		echo $row["barcode"];
		echo ("</td>");
		echo ("<td>");
		echo $row["name"];
		echo ("</td>");
		echo ("<td>");
		echo $row["price"];
		echo ("</td>");
		echo ("<td>");
		echo $row["date_bought"];
		echo ("</td>");
		echo ("<td>");
		echo $row["repair_date"];
		echo ("</td>");
		echo ("<td>");
		echo $row["department"];
		echo ("</td>");
		echo ("<td>");
		echo $row["location"];
		echo ("</td>");
		echo ("<td>");
		echo $row["manufacturer_details"];
		echo ("</td>");
		echo ("<td>");
		echo $row["supplier_details"];
		echo ("</td></tr>");
		$row = mysql_fetch_assoc($dataset);
	}
	echo ("</table>");
	mysql_close($link);
	?>
</body>
</html>