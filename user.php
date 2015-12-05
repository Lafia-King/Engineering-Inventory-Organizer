<?php
	include_once("dbconnection.php");
	
	class user extends dbconnection{
		function user(){
			dbconnection::dbconnection();
		}
		/**
		*query all users in the table and store the dataset in $this->result	
		*@return if successful true else false
		*/
		
		function get_all_users(){
			$query="select * from user";
			return $this->query($query);
		}
		/**
		*query all users in the table and store the dataset in $this->result	
		*@return if successful true else false
		*/
		
		function getUserByUsername($name){
			$query="SELECT * from user where username = '$name'";
			return $this->query($query);
		}
		
		function add_user($name, $email, $username,$password){
			//write the SQL query and call $this->query()
			$query ="insert into user set name='$name',
			email=$email, username=$username, password =$password";
			return $this->query($query);
		}
		
		/*
		*updates the record identified by id 
		*/
		function change_password($username,$newPassword){
			//write the SQL query and call $this->query()
			$query="update into user set pasword=$newPassword where username=$username";
			return $this->query($query);
		}


				
	}
	
	//call methods here to test
	// $obj = new user();
	// if(!$obj->get_all_users()){
	// 	echo "error";
	// }
	// $row =$obj->fetch();
	// while($row){
	// 	print_r($row);
	// 	$row= $obj->fetch();
	// }
	
?>