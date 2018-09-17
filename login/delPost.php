<?php

require('inc/config.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "DELETE FROM posts WHERE id='$id'";
 mysqli_query($conString, $sql);

 }
?>
<script>window.alert('Post deleted!'); window.history.back();</script>
<?php
?>