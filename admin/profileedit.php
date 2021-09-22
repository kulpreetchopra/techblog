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
$query ="select * From admin where id=$id";
$fire =mysqli_query($con,$query);

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
$user['name'];

}
?>
<!-- update -->
<?php   
include('dbcon.php');


  if(isset($_POST['submit'])){

   $name= $_POST['name'];
   $username =$_POST['username'];
   $password =$_POST['password'];
   $about =$_POST['about'];
   $twitter =$_POST['twitter'];
   $linkedin =$_POST['linkedin'];
   $facebook =$_POST['facebook'];
   $instagram =$_POST['instagram'];
  
   $q ="UPDATE admin SET name='$name',username='$username',password='$password',about='$about',twitter='$twitter',linkedin='$linkedin',facebook='$facebook',instagram='$instagram' WHERE id=$id";

   $fire =mysqli_query($con, $q);
    // if($fire)echo "data updated successfully.";
  	if($fire){
    $_SESSION['succes']="Profile Updatted Successfully!!";
    header("location:viewprofile.php");
  }else{
    $_SESSION['error']="Profile Updatted Unsuccessfully!!";
    header("location:viewprofile.php");
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
            <h1 class="m-0 text-dark"><i class="fas fa-edit"></i>&nbsp;<a href="viewprofile.php"><i class="fas fa-eye"></i></a></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
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
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $user['name'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" autocomplete="off" value="<?php echo $user['username'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" autocomplete="off" value="<?php echo $user['password'] ?>">
                  </div>
                 <div class="form-group">
                    <label>About</label>
                    <textarea type="text" class="form-control" name="about"><?php echo $user['about'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" class="form-control" name="twitter" value="<?php echo $user['twitter'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Linkedin</label>
                    <input type="text" class="form-control" name="linkedin" value="<?php echo $user['linkedin'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" class="form-control" name="facebook" value="<?php echo $user['facebook'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Instagram</label>
                    <input type="text" class="form-control" name="instagram" value="<?php echo $user['instagram'] ?>">
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