<?php
require('inc/config.php');
if(isset($_POST['submitPost'])){
$postTitle = $_POST['postTitle'];
$postBody = mysqli_real_escape_string($conString, $_POST['postBody']);
$postDesc = $_POST['postDesc']. ". . . ";
$postAuthor = $_POST['postAuthor'];
$postStatus = $_POST['postStatus'];
$postID = $_POST['postID'];

function cleanData($data){
	trim($data);
	strip_tags($data);
	stripcslashes($data);
	chop($data);
	return $data;
}

//$postDesc = cleanData($postDesc);


 

 

  $store = "UPDATE posts SET post_title = '$postTitle', post_desc = '$postDesc', post_body = '$postBody', post_time = now(), post_author = '$postAuthor', post_status = '$postStatus'"
          . "WHERE id = '$postID'";
   if(mysqli_query($conString, $store)){
       ?>
<script>
 alert("Post updated successfully");</script>
<?php
$_SESSION['postupdate'] = "yes";
session_start();
header('Location: viewPosts.php?postupdate=yes');

die();
   }

	
}

?>