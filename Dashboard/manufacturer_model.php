<?php
	
/**
 * @author Chloe Acheampong 
 * @copyright 2015
 */


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
		*query to get manufactures
		*@return  all manufacturers in the database
		*/
		function getAllManufacturers(){
			$query="select * from manufacturer";
			return $this->query($query);
		}


		/**
		*query to get manufacture by id
		*@return  a manufacturer in the database
		*/
		function getManufacturerById($mid){
			$query="select * from manufacturer where id=$mid";
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
			$query ="INSERT INTO manufacturer (name, email, phone_number, 
				website, country) VALUES ('$name', '$email', '$phone_number', '$website', '$country');";
			return $this->query($query);
			
		}
		
		/**
		*query to update a manufacturer in the database
		* 
		*@param string $name
		*@param string $email
		*@param string $phone_number
		*@param string $website
		*@param string $country
		*@return  true or false - successful or unsuccessful
		*/
		function updateManufacturer($id, $name, $email, $phone_number, $website, $country){
			$query ="UPDATE manufacturer SET name='$name',email='$email',phone_number='$phone_number',
			website='$website',country='$country' WHERE id=$id";
			return $this->query($query);
		}

		
	}

	
?>