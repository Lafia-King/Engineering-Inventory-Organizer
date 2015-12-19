<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include_once( 'user.php');
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$obj = new user();
$obj->getUserByUsername($user_check);
$row = $obj->fetch();
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: login/home.php'); // Redirecting To Home Page
}
?>