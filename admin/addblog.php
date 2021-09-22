<?php
error_reporting(0);
?>
<?php session_start(); ?>
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
            <h1 class="m-0 text-dark"><i class="fas fa-user-edit"></i>&nbsp;<a href="viewblog.php"><i class="fas fa-eye"></i></a></h1>
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
              <li class="breadcrumb-item active">Add Blogs</li>
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
              <form action="blogreg.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Tittle</label>
                    <input type="text" class="form-control" name="tittle" placeholder="Enter Tittle">
                  </div>
                  <div class="form-group">
                    <label>Link</label>
                    <input type="text" class="form-control" name="link" placeholder="Enter Link">
                  </div>
                  <div class="form-group">
                        <label>About</label>
                        <textarea class="form-control" rows="3" placeholder="Enter About..." name="about"></textarea>
                      </div>
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" placeholder="image">
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