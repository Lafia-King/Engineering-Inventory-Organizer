	function add_tool(){
		if (isset($_REQUEST['item-code'])) {
		$equipment_id=$_REQUEST['equipment_id'];
		$product_id=$_REQUEST['product_id'];
		$category_id=$_REQUEST['category_id'];
		$storage_location=$_REQUEST['storage_location'];
		$barcode=$_REQUEST['barcode'];
		$name=$_REQUEST['name'];
		$manufacturer_id=$_REQUEST['manufacturer_id'];
		$supplier_id=$_REQUEST['supplier_id'];
		$price=$_REQUEST['price'];
		$date_created= date('Y-m-d', strtotime($_REQUEST['date_created']));
		$repair_date= date('Y-m-d', strtotime($_REQUEST['repair-date']));
		$current_condition=$_REQUEST['current_condition'];
		$label=$_REQUEST['label'];
		$asset_type=$_REQUEST['asset_type'];
		$borrow_status=$_REQUEST['borrow_status'];
		$location=$_REQUEST['location'];
		$department=$_REQUEST['department'];


		$querry="INSERT INTO `items` (`equipment_id`, 'product_id', 'category_id', 'storage_location', `barcode`,'name',`manufacturer_id`, `supplier_id`, `price`, `date_created`, `repair_date`,
			 `current_conditions`, 'asset_type','borrow_status',`location`, `department`) 
			VALUES ('$equipment_id`', '$product_id', '$category_id','$storage_location','$barcode','$manufacturer_id', `supplier_id`, '$price', '$date_created','$repair_date' 
			 '$current_condition','asset_type','$borrow_status', '$location', '$department');";
		

		return $this->query($querry);
	}

		
	
		function delete_item(){
		$no=$_REQUEST['equipment_id'];
		$querry="DELETE FROM items WHERE item_number=$no";

		return $this->query($querry);
	}