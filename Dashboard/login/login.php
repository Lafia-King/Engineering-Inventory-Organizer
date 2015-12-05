<?php

	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) {
	// Define $username and $password
	$username=$_POST['username'];
	$password=$_POST['password'];

	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("localhost", "root", "");

	if (!$connection) die ("No connection exits");
	// To protect MySQL injection for Security purpose
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	// Selecting Database
	$db = mysql_select_db("inventorydb", $connection);
	if ($db){
		$rows = 0;
			// SQL query to fetch information of registerd users and finds user match.		
		$query = sprintf("SELECT count(*) as 'num' FROM user 
	    	WHERE username='%s' AND password='%s'", $username,$password);
		$rows = mysql_query($query, $connection);
			
		if (!$rows) {
		    echo "DB Error, could not query the database\n";
		    die ('MySQL Error: ' . mysql_error());
		    exit;
	    }

		$rows = mysql_fetch_assoc($rows);
		if ($rows['num'] == 1) {
				$_SESSION['login_user']=$username; // Initializing Session
				header("location: home.php"); // Redirecting To Other Page
		} else {
			$error = ":( Username or Password is invalid";
		}
	}else{
		die ("Database not found");
	}

	mysql_close($connection); // Closing Connection

	} 
?>

