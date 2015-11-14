<?php

	// $msg="Login";
	// if(isset($_REQUEST['username'])){
	// 	$username=$_REQUEST['username'];
	// 	$password=$_REQUEST['password'];
	// 	if(login($username, $password)){
	// 		session_start();
	// 		$_SESSION['username']=$username;			
	// 		$_SESSION['password']=$password;			
	// 		$_SESSION['usertype']=1;			
	// 	}
	// }



session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {

// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("inventory", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from user where password='$password' AND username='$username'", $connection);

$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection

}
?>


<!--<html>
	<head>
	</head>
	<body
	
		<div style="margin-left: 520px;">
				Login
		<form action="" method="">
			<table>
				<tr>
					<td>
						Username<input type="text" name="username">
					</td>
				</tr>
				<tr>
					<td>
						password<input type="password" name="password">
					</td>
				</tr>
				<tr>
					<td><input type="submit" value="Login"></td>
				</tr>
			</table>			
		</form>		
		</div>
	</body>
</html>-->
<?php
// 	function login($username, $password){
// 		$link=mysql_connect("localhost","root","");
// 		if(!$link){
// 			echo  mysql_error();
// 			exit();
// 		}
// 		if(!mysql_select_db("inventorydb",$link)){
// 			echo  mysql_error();
// 			exit();
// 		}
// 		$dataset= mysql_query("select * from user where username=$username and password =$password",$link);
// 		print_r($dataset);
// 		if(!$dataset){
// 			return false;
// 		}

// 		return true;
		
// 	}

?>