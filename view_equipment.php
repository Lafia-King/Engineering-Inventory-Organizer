<!-- @Author: Phoebe Priscilla Amoako -->
<!-- @Date: 22nd November, 2015 -->

<?php
	include_once("adb.php");
	
	class view_equipment extends adb{
		function view_equipment(){
			adb::adb();
		}
		// get all equipment in the database
		function getEquipment(){
			return $this->query("select * from equipment");
		}
		// get a single equipment in the database
		function getSingleEquipment($id){
			return $this->query("select * from equipment where id=$id");
		}
	}
	?>
