<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ashesi Engineering Inventory</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
       <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Ashesi Engineering Inventory</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="search" placeholder="name, id, or location" class="form-control">
            </div>
            <button type="submit" class="btn-success" >Search</button>
           <!-- <a href="index.php" class="button">Back</a> -->
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
	<center>
      <div class="container">
			<p></p>
        <?php
		/**
		*Include the view_equipment class and use an instance of it to display equipment information
		*/
		include_once("view_equipment.php");
			$newView = new view_equipment();
			$newView->getSingleEquipment($_REQUEST['id']);		
			$row = $newView->fetch();
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
			
			echo ("<form>
					<table>
					<tr>
						<td>ID:</td>
						<td><input type='text' value=$id></td>
					</tr>
					<tr>
						<td>Name:</td>
						<td><input type='text' value=$name></td>
					</tr>
					<tr>
						<td>Equipment ID:</td>
						<td><input type='text' value=$equipment_id></td>
					</tr>
					<tr>
						<td>Category ID:</td>
						<td><input type='text' value=$category_id></td>
					</tr>
					<tr>
						<td>Storage Location:</td>
						<td><input type='text' value=$storage_location></td>
					</tr>
					<tr>
						<td>Supplier ID:</td>
						<td><input type='text' value=$supplier_id></td>
					</tr>
					<tr>
						<td>Manufacturer ID:</td>
						<td><input type='text' value=$manufacturer_id></td>
					</tr>
					<tr>
						<td>Product ID:</td>
						<td><input type='text' value=$product_id></td>
					</tr>
					<tr>
						<td>Current Condition:</td>
						<td><input type='text' value=$current_condition></td>
					</tr>
					<tr>
						<td>Label:</td>
						<td><input type='text' value=$label></td>
					</tr>
					<tr>
						<td>Asset Type:</td>
						<td><input type='text' value=$asset_type></td>
					</tr>
					<tr>
						<td>Borrow Status:</td>
						<td><input type='text' value=$borrow_status></td>
					</tr>
					<tr>
						<td>Date Created:</td>
						<td><input type='text' value=$date_created></td>
					</tr>
					<tr></tr><tr>
					<td></td>
						<td>
							<input type='submit' value='Edit' >
						</td>
					</tr>
					
			</table>
		</form> ");
		?>
		<a href="index.php" class="button">Back</a>
      </div>
    </div>
