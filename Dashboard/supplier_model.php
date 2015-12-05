<?php
	include_once("dbconnection.php");
	
	  /**
	*This is a class implemented to interact with the Supplier
	*database.
	*/
	class Supplier extends dbconnection{

		/**
		*A constructor to create the database connection
		*/
		function Supplier(){
			dbconnection::dbconnection();
		}
		


		/**
		*query to get manufactures
		*@return  all Suppliers in the database
		*/
		function getAllSuppliers(){
			$query="select * from supplier";
			return $this->query($query);
		}


		
	}

	
?>