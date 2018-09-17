<?php
require('inc/config.php');
if(isset($_POST['submitPost'])){
$postTitle = $_POST['postTitle'];
$postBody = mysqli_real_escape_string($conString, $_POST['postBody']);
$postDesc = $_POST['postDesc']. ". . . ";
$postAuthor = $_POST['postAuthor'];
$postStatus = $_POST['postStatus'];

function cleanData($data){
	trim($data);
	strip_tags($data);
	stripcslashes($data);
	chop($data);
	return $data;
}

//$postDesc = cleanData($postDesc);


 $target_dir = "uploads/images/";
   $target_dir = $target_dir.str_replace(" ", "_", $_FILES['postImage']['name']);
   $uploadFile_type=$_FILES["postImage"]["type"];
   $postImage = $target_dir;
   //echo $postImage;
   //Check if file exists
   if (file_exists($target_dir )) {
  echo "File already exists.";
   die();
    $uploadOk = 0;
}
    //Check the size of the file.
   if ($_FILES["postImage"]["size"] > 500000) {
	echo "File too large";
    $uploadOk = 0;
}

   if($_FILES['postImage']['type'] != "image/jpg" && $_FILES['postImage']['type'] != "image/png" && $_FILES['postImage']['type'] != "image/jpeg"
    && $_FILES['postImage']['type'] != "gif" ) {
      echo "File format not supported.";
    $uploadOk = 0;
    die();
}
else{
	   if (move_uploaded_file($_FILES["postImage"]["tmp_name"], $target_dir)) {
 echo "File uploaded"; 
  $store = "INSERT INTO posts(post_title, post_desc, post_body, post_time, post_author, post_featuredimage, post_status) 
  VALUES('$postTitle', '$postDesc', '$postBody', now(), '$postAuthor', '$postImage', '$postStatus')";
   if(mysqli_query($conString, $store)){
       echo "Saved successfully"; 
	   echo "<br>";
	   echo $postDesc;
   }else{
       die(mysqli_error($conString));
   }
}
}
	
}

?>