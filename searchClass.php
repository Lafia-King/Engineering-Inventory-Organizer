<?php
    include_once("dbconnection.php");
    
    class searchClass extends dbconnection{
        function searchClass(){
            dbconnection::dbconnection();
        }
        /**
        *query all equipments in the table and search the dataset for matches of the search and place $this->result   
        *@return if successful search results display else search displays 'there was no results'
        */
        
        function searchEquipments($goggles){
            $query="SELECT * FROM category, equipment, manufacturer, supplier WHERE name LIKE $goggles " ;
            return $this->query($query);
        }
        /**
        *query all equipments in the table and store the dataset in $this->result   
        *@return if successful true else false
        */
        
        function getEquipmentByName($name){
            $query="SELECT * from equipment where name = '$name'";
            return $this->query($query);
        }
        
        function getEquipmentById($id){
            $query="SELECT * from equipment where id = '$id'";
            return $this->query($query);
        }
        
        function updateEquipments($id,$name, $equipment_id, $category_id,$storage_location, $supplier_id, $manufacturer_id, $product_id, $current_condition, $label, $asset_type, $borrow_status, $date_created){
            $query ="UPDATE equipment SET name='$name', equipment_id='$equipment_id', category_id='$category_id', storage_location='$storage_location',supplier_id='$supplier_id', manufacturer_id='$manufacturer_id', product_id='$product_id', current_condition='$current_condition', label='$label', asset_type='$asset_type', borrow_status='$borrow_status', date_created='$date_created'
             WHERE id='$id'";
            return $this->query($query);
        }
        
        function addEquipments($id,$name, $equipment_id, $category_id,$storage_location, $supplier_id, $manufacturer_id, $product_id, $current_condition, $label, $asset_type, $borrow_status, $date_created){
            $query ="INSERT INTO `equipment`(id, name, equipment_id, category_id, storage_location, supplier_id, manufacturer_id, product_id, current_condition, label, asset_type, borrow_status, date_created)
            VALUES ('$id','$name', '$equipment_id', '$category_id', '$storage_location', '$supplier_id', '$manufacturer_id', '$product_id', '$current_condition', '$label', '$asset_type', '$borrow_status', '$date_created')";
            return $this->query($query);
        }          
                

                
    }
    
?>