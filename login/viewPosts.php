<?php
   require 'inc/header.php';
   require 'inc/sidebar.php';
?>
<div class="wrapper">

 <!-- Left side column. contains the logo and sidebar -->
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog Posts
        <small></small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php
                if(isset($_GET['postupdate'])){
                $_SESSION['postupdate'] = "yes";
                if(isset($_SESSION['postupdate'])){
                    ?>
                
                   <script>alert("Post updated!");</script>
            </script>

            <?php
                unset($_SESSION['postupdate']);
                }
                }
                ?>
                
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial Number</th>
                  <th>Author</th>
                  <th>Title</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
              
               
              
               <?php
			   $selectPosts = "SELECT * FROM posts ORDER BY post_time DESC";
			   $queryPosts = mysqli_query($conString, $selectPosts);
			   while($postData = mysqli_fetch_assoc($queryPosts)){
				   
				   echo "<tr>";
				   echo "<td>".$postData['id']."</td>";
				   echo "<td>".$postData['post_author']."</td>";
				   echo "<td>".$postData['post_title']."</td>";
				   echo "<td>".$postData['post_time']."</td>";
				 ##   echo "<a href='".$baseURL."blog-single.php?id=".$postData['id']."'>";
					echo "<td><a href='".$baseURL."blog-single.php?id=".$postData['id']."' target='_blank'><button class='btn btn-success'>View Post</button></a>";
					echo "<a href='".$baseURL."admin/editPost.php?id=".$postData['id']."'> "." "."<button class='btn btn-primary'>Edit Post</button></a>";
					echo "<a href='".$baseURL."admin/delPost.php?id=".$postData['id']."'>"." "."<button class='btn btn-danger'>Delete Post</button></a></td>";
					#echo "</a>";
			   }
			   ?>
                
                  
                  
                </tr>
                
              
                </tbody>
             
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
     require 'inc/footer.php';
  ?>