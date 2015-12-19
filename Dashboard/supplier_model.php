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


		/**
		*query to get manufacture by id
		*@return  a Supplier in the database
		*/
		function getSupplierById($mid){
			$query="select * from Supplier where id=$mid";
			return $this->query($query);
		}

		/**
		*query to add a Supplier to Supplier database
		* 
		*@param string $name
		*@param string $email
		*@param string $phone_number
		*@return  true or false - successful or unsuccessful
		*/
		function addSupplier($name, $email, $phone_number){
			$query ="INSERT INTO Supplier (name,  phone_number, email) VALUES ('$name', '$phone_number',
				'$email');";
			return $this->query($query);
			
		}
		
		/**
		*query to update a Supplier in the database
		* 
		*@param string $name
		*@param string $email
		*@param string $phone_number
		*@return  true or false - successful or unsuccessful
		*/
		function updateSupplier($id, $name, $email, $phone_number){
			$query ="UPDATE Supplier SET name='$name',email='$email',phone_number='$phone_number'
			 WHERE id=$id";
			return $this->query($query);
		}

		
	}

	
?>