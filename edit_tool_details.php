	function edit_equipment_details(){
	
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


		$querry= "UPDATE equipment 
		SET(`equipment_id = $equipment_id`, 'product_id = $product_id','category_id = $category_id', 'storage_location = $storage_location',`barcode = $barcode`, `name` = $name, `manufacturer_id = $manufacturer_id', `supplier_id = $supplier_id`, `price = $price`, `date_created =$date_created`, `repair_date = $repair_date`,
			 `current_condition = $current_condition`,'asset_type = $asset_type','borrow_status = $borrow_status', `location =$location`, `department`
			WHERE equipment_id=$equipment_id);
			
			return $this->query($querry);
		

	}
