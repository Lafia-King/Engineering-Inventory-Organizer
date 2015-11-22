<?php
	include_once("dbconnection.php");
	
	  /**
	*This is a class implemented to interact with the manufacturer
	*database.
	*/
	class Manufacturer extends dbconnection{

		/**
		*A constructor to create the database connection
		*/
		function Manufacturer(){
			dbconnection::dbconnection();
		}
		


		/**
		*query to add a record to family planning records 
		*@return  all manufacturers in the database
		*/
		function getAllManufacturers(){
			$query="select * from manufacturer";
			return $this->query($query);
		}


		/**
		*query to add a manufacturer to manufacturer database
		* 
		*@param string $name
		*@param string $email
		*@param string $phone_number
		*@param string $website
		*@param string $country
		*@return  true or false - successful or unsuccessful
		*/
		function addManufacturer($name, $email, $phone_number, $website, $country){
			$query ="insert into manufacturer set name='$name',
			email=$email, phone_number=$phone_number, website=$website, 
			country=$country";
			return $this->query($query);
			
		}
		

		function update_manufacturer()
		}

		
	}

	
?>