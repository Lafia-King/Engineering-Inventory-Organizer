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

    if (isset($_GET['id'])) {

        $equipment_id = $_GET['id'];
    }

    $get_pro = "select * from equipment where id=$equipment_id";



    $run_pro = mysql_query($get_pro, $link);

    while ($row_pro = mysql_fetch_array($run_pro)) {
        $e_id1 = $row_pro['id'];
        $e_id = $row_pro['equipment_id'];
        $e_name = $row_pro['name'];
        $category = $row_pro['category_id'];
        $storage_location = $row_pro['storage_location'];
        $supplier_id = $row_pro['supplier_id'];
        $manufacturer_id = $row_pro['manufacturer_id'];
        $product_id = $row_pro['current_condition'];
        $current_condition = $row_pro['product_id'];
        $label = $row_pro['label'];

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
        
        <!--This is the Id for the equipment -->
		<tr>
		<td align='right'>ID</td>
		<td><input type='text' name='product_name'  /></td>
		</tr>
			
			<!--This is the name of the equipment -->
		<tr>
		<td align='right'>Name</td>
		<td><input type='text' name='product_name' /></td>

		<!--This is the equipment id  -->
		<tr>
		<td align='right'>Equipment ID</td>
		<td><input type='text' name='product_name' /></td>


		<!--This is the category id  -->
		<tr>
		<td align='right'>Category Id</td>
		<td><input type='text' name='product_name' /></td>

		<!--This is the storage location -->
		<tr>
		<td align='right'>Storage Location</td>
		<td><input type='text' name='product_name' /></td>


		<!--This is  the supplier id -->
		<tr>
		<td align='right'>Supplier ID</td>
		<td><input type='text' name='product_name' /></td>

		<!--This is the manufacturer id -->
		<tr>
		<td align='right'>Manufacturer ID</td>
		<td><input type='text' name='product_name' /></td>

		<!--This is the product_id -->
		<tr>
		<td align='right'>Product ID</td>
		<td><input type='text' name='product_name' /></td>


		<!--This is the current condition of the equipment -->
		<tr>
		<td align='right'>Current Condition</td>
		<td><input type='text' name='product_name' /></td>

		<!--This is the label -->
		<tr>
		<td align='right'>Label</td>
		<td><input type='text' name='product_name' /></td>

		<!--This is the Asset Type of the equipment -->
		<tr>
		<td align='right'>Asset Type</td>
		<td><input type='text' name='product_name' /></td>

		<!--This is the Borrow Status of equpment -->
		<tr>
		<td align='right'>Asset Type</td>
		<td><input type='text' name='product_name' /></td>

		<!--This is the when the  equpment was created -->
		<tr>
		<td align='right'>Asset Type</td>
		<td><input type='text' name='product_name' /></td>



		</tr>

		

		</table>
		</form>

		</body>
		</html>
		";
	}


    mysql_close($link);

    include("footer.html");
    ?> 

    </html>