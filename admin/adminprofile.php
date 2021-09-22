<?php
error_reporting(0);
?>
<?php

       include ('dbcon.php');

       $pass=$_SESSION['password'];
       $q = "SELECT * FROM `admin` WHERE  `password`='$pass'";
       $query = mysqli_query($con, $q);
       

       $result = mysqli_fetch_array($query)
  ?>
<?php include("session.php");?>
<?php include"header.php";?>
<?php include"sidebar.php";?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-2">
            <h1 class="m-0 text-dark"><i class="fas fa-user-edit"></i>&nbsp;<a href="viewprofile.php"><i class="fas fa-eye"></i></a></h1>
          </div><!-- /.col -->
          <div class="col-sm-8">
            <?php
              if(isset($_SESSION['succes'])){
                ?>
                <div style="color:#3c763d;background-color: #dff0d8;border-color: #d6e9c6;" class="alert alert-success alert-dismissible">
                  <a style="color:#3c763d;text-decoration:none;opacity:1.2;" href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <center>
                  <i class="far fa-check-circle"></i>
                  <?php echo $_SESSION['succes'];
                  unset( $_SESSION['succes']); ?>
                  </center>
                </div>
                <?php
              }
              ?>
              <?php
              if(isset($_SESSION['error'])){
                ?>
                <div style="color: #a94442;background-color: #f2dede;border-color: #ebccd1;" class="alert alert-success alert-dismissible">
                  <a style="color:#a94442;text-decoration:none;opacity:1.2;" href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <center>
                  <i class="far fa-times-circle"></i>
                  <?php echo $_SESSION['error'];
                  unset( $_SESSION['error']); ?>
                  </center>
                </div>
                <?php
              }
              ?>
          </div>
          <div class="col-sm-2">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Add Profile</li>
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
                <h3 class="card-title">Insert Table</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="adminreg.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" autocomplete="off" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" autocomplete="off" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" placeholder="image">
                  </div>
                 <div class="form-group">
                    <label>About</label>
                    <textarea type="text" class="form-control" name="about" placeholder="About"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" class="form-control" name="twitter" placeholder="Twitter Link">
                  </div>
                  <div class="form-group">
                    <label>Linkedin</label>
                    <input type="text" class="form-control" name="linkedin" placeholder="Linkedin Link">
                  </div>
                  <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" class="form-control" name="facebook" placeholder="Facebook Link">
                  </div>
                  <div class="form-group">
                    <label>Instagram</label>
                    <input type="text" class="form-control" name="instagram" placeholder="Instagram Link">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button style="color:white" type="submit" name="submit" class="btn btn-block">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->




</section>
</div><!--content-wrapper end-->
<?php include"footer.php";?>