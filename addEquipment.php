<!--
@author Judah Awentemi Lafia-King
@author Judah Awentemi Lafia-King<lafia.king@gmail.com>
-->

<!--
* @method addTool()
-->

<!--
@param No parameters
-->

<!--
@return Returns query
-->

<?php

function addTool() {
    if (isset($_REQUEST['item-code'])) {
        $tool_id = $_REQUEST['tool_id'];
        $barcode = $_REQUEST['barcode'];
        $name = $_REQUEST['tool_name'];
        $manufacturer = $_REQUEST['manufacturer-name'];
        $supplier = $_REQUEST['supplier_name'];
        $price = $_REQUEST['price'];
        $date_purchased = date('Y-m-d', strtotime($_REQUEST['date-bought']));
        $repair_date = date('Y-m-d', strtotime($_REQUEST['repair-date']));
        $condition = $_REQUEST['condition'];
        $location = $_REQUEST['location'];
        $department = $_REQUEST['department'];


        $querry = "INSERT INTO `items` (`item_number`, `barcode_number`, 
			`item_name`, `manufacturer`, `supplier_name`, `price`, `date_bought`, `last_repair_date`,
			 `conditions`, `location`, `department`) 
			VALUES ('$item_no', '$barcode', '$name', '$manufacturer', `supplier_name`, '$price', '$date_bought', 
			'$repair_date', '$condition', '$location', '$department');";


        return $this->query($querry);
    }
}

?>