<?php
	include_once("dbconnection.php");
	
	  /**
	*author Jessica Sugru Ali
	*This is a class implemented to interact with the users
	*database. Updated Chloe Acheampong's code
	*/
	class User extends dbconnection{

		/**
		*A constructor to create the database connection
		*/
		function User(){
			dbconnection::dbconnection();
		}
		


		/**
		*query to get users
		*@return  all users in the database
		*/
		function getAllUsers(){
			$query="select * from user";
			return $this->query($query);
		}


		/**
		*query to get user by id
		*@return  a user in the database
		*/
		function getUserById($uid){
			$query="select * from User where id=$uid";
			return $this->query($query);
		}

		/**
		*query to add a User to User database
		* 
		@param string $name
		*@param string $username
		*@param string $email
		*@param pwd $password
		
		*@return  true or false - successful or unsuccessful
		*/
		function addUser($name ,$username, $email,$password ){
			$query ="INSERT INTO User (name, username, email, password ) VALUES ('$name','$username','$email','$password'
				);";
			return $this->query($query);
			
		}
		
		/**
		*query to update a user in the database
		* 
		*@param string $username
		*@param string $email
		*@param pwd $password
		*@return  true or false - successful or unsuccessful
		*/
		//function updateUser($id, $name, $username, $password, $email){
			//$query ="UPDATE Supplier SET name='$name',username='$username',password='$password',email='$email','
			// WHERE id=$id";
			//return $this->query($query);
		//}

		
	}

	
?>