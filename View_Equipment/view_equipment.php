<?php

	/** @author Phoebe Priscilla Amoako
	 *@author Phoebe Priscilla Amoako (phoebe.amoako@ashesi.edu.gh)
	 */
	include_once("adb.php");
	
	class view_equipment extends adb{
		function view_equipment(){
			adb::adb();
		}
		
	/**
	 *@method array getEquipment()
	 *@method array getSingleEquipment($id)
	 */
		
		/**
		 *@return list Returns all equipment from database
		 */
		function getEquipment(){
			return $this->query("select * from equipment");
		}
		/**
		 *@return list Returns single equipment from database
		 */
		function getSingleEquipment($id){
			return $this->query("select * from equipment where id=$id");
		}
	}
	?>
