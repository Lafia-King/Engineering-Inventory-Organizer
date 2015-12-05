<?php

	/** @author Phoebe Priscilla Amoako
	 *@author Phoebe Priscilla Amoako (phoebe.amoako@ashesi.edu.gh)
	 */
	include_once("dbconnection.php");
	
	class viewEquipment extends dbconnection{
		
		/**
		 *@method void viewEquipment()
		 *@method array getEquipment()
		 *@method array getSingleEquipment($id)
		 */
		
		/**
		 *@return void Establishes connection with database for other methods
		 */
		function viewEquipment(){
			dbconnection::dbconnection();
		}
		
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
		//functions below were extra functionalities which would have been added if there was more time
		/**
		 *@return list Returns all borrowed equipment from database
		 */
		/* function getBorrowedEquipment(){
			return $this->query("select * from equipment where borrow_status = 'Borrowed'");
		}
		 */
		/**
		 *@return list Returns all overdue equipment from database
		 */
		/* function getOverdueEquipment(){
			return $this->query("select * from equipment where dateReturn < cast((now()) as date)");
		}	 */
		
		/**
		 *@return list Returns all equipment due today from database
		 */
		/* function getDueEquipment(){
			return $this->query("select * from equipment where dateReturn=cast(now() as date");
		} */
		
		/**
		 *@return list Returns all broken equipment from database
		 */
		/* function getBrokenEquipment(){
			return $this->query("select * from equipment where state='bad'");
		} */
	}
	?>
