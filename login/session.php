<?php
// Establishing Connection with Server by passing server_name, user_id and password as parameters
require 'inc/config.php';


session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['validuser'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($conString, "SELECT * FROM users WHERE users_username='$user_check'");
$profileData = mysqli_fetch_assoc($ses_sql);
$login_session =$profileData['users_username'];
if(!isset($login_session)){
mysqli_close($conString); // Closing Connection
header('location: login.html'); // Redirecting To Home Page
}
else{
	//echo "You're logged in!";
}