<?php

/* 
 * This file contains config for the site - db connection.
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ice";
$baseURL = "http://localhost/ice/";
// Create connection
$conString = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conString) {
    die("Unable to connect to database: " . mysqli_connect_error());
}

?>