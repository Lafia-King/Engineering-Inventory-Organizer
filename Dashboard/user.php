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
		
		function getAllUsers(){
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
		
		function getUserById($u_id){
			$query="SELECT * from user where id = $u_id";
			return $this->query($query);
		}
		
		function updateUser($u_id, $name,$username, $password,$email, $user_type){
			$query ="UPDATE User SET  name='$name', username='$username',password='$password',email='$email',user_type='$user_type'
			 WHERE id=$u_id";
			return $this->query($query);
		}
		
		function addUser($name, $email, $username,$password, $user_type){
			//write the SQL query and call $this->query()
			$query ="INSERT INTO `user`( `name`, `email`, `username`, `password`, `user_type`) VALUES ('$name','$email','$username','$password','$user_type')";
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