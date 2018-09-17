<?php
   require 'inc/header.php';
   require 'inc/sidebar.php';
?>

<?php
   //require('/inc/config.php');
   $post = $_GET['id'];
   $fetchPosts = "SELECT * FROM posts WHERE id = '$post'";
   $fetchPosts = mysqli_query($conString, $fetchPosts);
   $postData = mysqli_fetch_array($fetchPosts);
   
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        New Post
        <small>it all starts here</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
         
		  
            <form method = "POST" enctype = "multipart/form-data" action = "updatePost.php">
<label for = "postTitle">Post title</label> <br>
<input type = "text" name = "postTitle" class="form-control" style="width:50%" value="<?php echo $postData['post_title']; ?>">
<!--hidden fields. The values are fetched from the user's profile via PHP POST--->
<input type = "hidden" value ="<?php echo $profileData['users_fname']." ".$profileData['users_lname']; ?>" name = "postAuthor">

<input type = "hidden" value ="<?php echo $postData['id']; ?>" name = "postID">

<br>
<br>
<label for = "postImage">Featured Image</label><br>
<input type = "file" name = "postImage" class="form-control" style="width:50%">
<br>
<br>

Post Status<br>
<select type = "select" name="postStatus" class="form-control" style="width:50%">
<option value="1">Published</option>
<option value="0">Draft</option>
</select>

<br>
<br>


<label for = "postDesc">Description</label><br>
<input type = "text" name = "postDesc" maxlength = "140" class="form-control" style="width:50%" value="<?php echo $postData['post_desc']; ?>">
<br>
<br>

<label for = "postBody">Post body</label><br>
<textarea  name = "postBody" class="form-control" style="height:200px">
<?php
echo $postData['post_body'];
?>
</textarea>
<br>
<br>
<br><br>
<input type = "submit" name = "submitPost" value = "Submit" class="btn btn-lg btn-success pull-right">


</form>

		  
		  
		  
		  
        </div>
        <!-- /.box-body -->
       
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
     require 'inc/footer.php';
  ?>