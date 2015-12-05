	function edit_tool_details(){
	
		$tool_id=$_REQUEST['tool_id'];
		$barcode=$_REQUEST['barcode'];
		$name=$_REQUEST['tool_name'];
		$manufacturer=$_REQUEST['manufacturer-name'];
		$supplier=$_REQUEST['supplier_name'];
		$price=$_REQUEST['price'];
		$date_purchased= date('Y-m-d', strtotime($_REQUEST['date-bought']));
		$repair_date= date('Y-m-d', strtotime($_REQUEST['repair-date']));
		$condition=$_REQUEST['condition'];
		$location=$_REQUEST['location'];
		$department=$_REQUEST['department'];


		$querry="UPDATE `items` 
		SET`tool_id`, `barcode`, `item_name`, `manufacturer_name `supplier_name`, `price`, `date_bought`, `last_repair_date`,
			 `condition`, `location`, `department`
			WHERE tool_id=$tool_id
		

		return $this->query($querry);

	}