<?php

session_start(); // Starting Session
require 'inc/config.php';
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        ?>
<script>alert('One or more fields empty. Please try again'); window.history.back()</script>
<?php
        die();
    } else {
// Define $username and $password
        $username = $_POST['username'];
        $password = hash('sha256', $_POST['password']);
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
       
// To protect MySQL injection for Security purpose
        
        function sanitizeInput($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            $data = strip_tags($data);
            return $data;
}
        $username = sanitizeInput($username);
        $password = sanitizeInput($password);
// SQL query to fetch information of registerd users and find user match.
        $query = mysqli_query($conString, "SELECT * FROM users WHERE users_pword='$password' AND users_username='$username'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['validuser'] = $username; // Initializing Session
            header("location: newPost.php"); // Redirecting To Other Page
        } else {
             ?>
<script>alert('Username or password incorrect. Try again.'); window.history.back()</script>
<?php
        die();
        }
        mysqli_close($conString); // Closing Connection
    }
}
else{
    echo "You seem to have come through the wrong way. Go back and try again.";
}
?>