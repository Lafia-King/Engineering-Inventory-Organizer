	function add_items(){
		if (isset($_REQUEST['item-code'])) {
		$item_no=$_REQUEST['item-code'];
		$barcode=$_REQUEST['bar-code'];
		$name=$_REQUEST['item-nm'];
		$manufacturer=$_REQUEST['manu-nm'];
		$price=$_REQUEST['price'];
		$date_bought= date('Y-m-d', strtotime($_REQUEST['date-bought']));
		$repair_date= date('Y-m-d', strtotime($_REQUEST['repair-date']));
		$condition=$_REQUEST['condition'];
		$location=$_REQUEST['location'];
		$department=$_REQUEST['department'];


		$querry="INSERT INTO `items` (`item_number`, `barcode_number`, 
			`item_name`, `manufacturer`, `price`, `date_bought`, `last_repair_date`,
			 `conditions`, `location`, `department`) 
			VALUES ('$item_no', '$barcode', '$name', '$manufacturer', '$price', '$date_bought', 
			'$repair_date', '$condition', '$location', '$department');";
		

		return $this->query($querry);
	}

	}
	
	
	
		function delete_item(){
		$no=$_REQUEST['id'];
		$querry="DELETE FROM items WHERE item_number=$no";

		return $this->query($querry);
	}