<?php
error_reporting(0);
?>
<?php session_start();?>
<?php include("session.php");?>
<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From blog where id=$id";
$fire =mysqli_query($con,$query);

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
$user['tittle'];

}
?>
<!-- update -->
<?php   
include('dbcon.php');


  if(isset($_POST['submit'])){

   $tittle= $_POST['tittle'];
   $about =$_POST['about'];
   $link =$_POST['link'];
  
   $q ="UPDATE blog SET tittle='$tittle',link='$link',about='$about' WHERE id=$id";

   $fire =mysqli_query($con, $q);
    // if($fire)echo "data updated successfully.";
  	if($fire){
    $_SESSION['succes']="Blog Updatted Successfully!!";
    header("location:viewblog.php");
  }else{
    $_SESSION['error']="Blog Updatted Unsuccessfully!!";
    header("location:viewblog.php");
    // echo "<div class='alert alert-danger'>Query Failed.</div>";
  }



}
?>

<?php include"header.php";?>
<?php include"sidebar.php";?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-edit"></i>&nbsp;<a href="viewblog.php"><i class="fas fa-eye"></i></a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Blogs</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit Table</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Tittle</label>
                    <input type="text" class="form-control" name="tittle" value="<?php echo $user['tittle'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Link</label>
                    <input type="text" class="form-control" name="link" value="<?php echo $user['link'] ?>">
                  </div>
                  <div class="form-group">
                    <label>About</label>
                    <textarea type="text" rows="3" class="form-control" name="about"><?php echo $user['about'] ?></textarea>
                  </div>      
                <!-- /.card-body -->

                <div class="card-footer">
                  <button style="color:white" type="submit" name="submit" class="btn btn-block">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->




</section>
</div><!--content-wrapper end-->

<?php include"footer.php";?>