<?php
	/** @Benedicta Amo Bempah 
	 *@author Benedicta Amo Bempah (benedicta.bempah@ashesi.edu.gh)
	 */

	$output="";
	mysql_connect('localhost',"root", "") or die("could not connect");
	mysql_select_db("inventoryDB") or die("could not find db!");

		 /**
		 *query all equipments in the table and store the dataset in $count=result 
		 *@param if successful search results display else 'there was no results'
		 */

		if(isset($_POST['search'])){
		 $searchq = $_POST['search'];
		 $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

		 $query = mysql_query("SELECT * FROM category, equipment, manufacturer, supplier WHERE name LIKE '%$searchq%' ") or die("could not search..");
		 $count = mysql_num_rows($query);
		if($count == 0){
		 $output = 'There was no search results..';
		} else{
		 while($row = mysql_fetch_array($query)){
			$tool_name = $row['name'];
			$tool_id = $row['tool_id'];

			$output .='<div>'.$tool_name.' </div>';
			}
		}

	}
	?>

		<!--Create search button and engine - styling and format-->
		<!DOCTYPE html>
		<html>
		<head>
		<meta  http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<title>Search Tools </title>
		</head>
		<body>

		<!-- creating style for search button/section -->
		<form action=" " method="post">
    	<left>
    	<input type="text" name="search" size='26' placeholder="Search for tools..." />
    	<input type="submit" value="Go" />

		</left>
		</form>
		<?php print ("$output");?>

		</body>
		</html>
