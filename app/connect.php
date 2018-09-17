<?php
  include_once 'config.php';
  $conn = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_CODE, DATABASE_NAME);
  if (ENV == 0) {
    $connection_status = ($conn) ? "Connected" : "Not Connected" ;
    echo $connection_status;
  }
?>
