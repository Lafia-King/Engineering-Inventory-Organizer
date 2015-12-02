<!-- The purpose of this page is to edit  the equipment details of items in the datbase-->

<html>

    <?php
    include("header.html");
    echo("<div><h1 style='color:#5f6468;'><b>Equipment</b></h1>"
//    . "<em>the first priority information</em>"
    . "<hr></div>");

//check connection to your database 
    $servername = "localhost"; //name of the server 
    $database = "inventorydb"; //this database has to exist.  
    $username = "root";  //the main admin user of mysql 
    $password = "";   //use root password of mysql 


    $link = mysql_connect($servername, $username, $password, $database);
//if result is false, the connection did not open 
    if (!$link) {
        echo "Failed to connect to mysql.";
        //display error message from mysql 
        echo mysql_error();
        exit();  //end script 
    }
//select the database to work with using the open connection  
    if (!mysql_select_db($database, $link)) {
        echo "Failed to select database.";
        //display error message from mysql 
        echo mysql_error();
        exit();
    }


    //begin running query for equipment info from inventorydb  for requests table
    $dataset = mysql_query("select * from equipment", $link);
    if (!$dataset) {
        echo "Error";
        echo mysql_error();
        exit();
    }

 echo " <html>

		<head>
		<title>Product Insertion </title>
		<script src='//tinymce.cachefly.net/4.1/tinymce.min.js'></script>
        <script>tinymce.init({selector:'textarea'});</script>
		</head>

		<body bgcolor='#819FF7'>

		<form action='insert_product.php' method='post' enctype='multipart/form-data'>

		<table align='center' width='700' border='2' bgcolor='#BCA9F5'>
		<tr align='center'>
		<td colspan='7'><h2>New Products</h2></td>

		</tr>

		<tr>
		<td align='right'>Product Name</td>
		<td><input type='text' name='product_name' size='60' required/></td>
		</tr>

		<tr>
		<td align='right'>Product Category</td>
		<td><select  name='product_cat' />
		<option>Select a Category</option>
		<?php include('cat.php');
		insert_cat();
		?>
		</select></td>
		</tr>

		<tr>
		<td align='right'>Product Brand</td>
		<td><select name='product_brand' required/>
		<option>Select a Brand</option>
		<?php 
		insert_brand();
		?>
		</select></td>
		</tr>

		<tr>
		<td align='right'>Product Image</td>
		<td><input type='file' name='product_image' required/></td>
		</tr>

		<tr>
		<td align='right'>Product Price</td>
		<td><input type='text' name='product_price'/ required/></td>
		</tr>

		<tr>
		<td align='right'>Product Description</td>
		<td><textarea name='product_desc' cols='22' rows='10'></textarea></td>
		</tr>

		<tr>
		<td align='right'>Product Keywords</td>
		<td><input type='text' name='product_keyword'/ required/></td>
		</tr>

		<tr align='center'>

		<td colspan='8'><input type='submit' name='insert_post' value='Insert Now'/></td>
		</tr>

		</table>
		</form>

		</body>
		</html>
		";


    mysql_close($link);

    include("footer.html");
    ?> 

    </html>