<?php
error_reporting(0);
?>
<?php session_start();?>
<?php
 include ('dbcon.php');
 if(isset($_REQUEST['update']))
 {
  $file=$_FILES["image"]["name"];
    // echo $file;
    $tmp_name =$_FILES["image"]["tmp_name"];
    $path ="blogimage/".$file;
    //only jpg,png,upload
    $file1 =explode(".", $file); //image.jpg Arrays
    $file1[1];   //jpg
    $ext =$file1[1];
    $allowed=array("jpg","jpeg","png","gif");
    $id=$_REQUEST['id'];
    if(in_array($ext, $allowed))
    { 
 move_uploaded_file($tmp_name,$path);
    $query ="UPDATE blog SET image = '$path'where id='$id' ";
    $fire = mysqli_query($con, $query);
    if($fire){
    $_SESSION['success']="Image Updatted Successfully!!";
  }
  else{
    $_SESSION['errorr']="Image Updatted Unsuccessfully!!";
  }
}
} 
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
            <h1 class="m-0 text-dark"><i class="fas fa-eye"></i>&nbsp;<a href="addblog.php"><i class="fas fa-user-edit"></i></a></h1>
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
                  unset( $_SESSION['succes']);?>
                  </center>
                </div>
                <?php
              }
              ?>
              <?php
              if(isset($_SESSION['success'])){
                ?>
                <div style="color:#3c763d;background-color: #dff0d8;border-color: #d6e9c6;" class="alert alert-success alert-dismissible">
                  <a style="color:#3c763d;text-decoration:none;opacity:1.2;" href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <center>
                  <i class="far fa-check-circle"></i>
                  <?php echo $_SESSION['success'];
                  unset( $_SESSION['success']); ?>
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
                  unset( $_SESSION['error']);?>
                  </center>
                </div>
                <?php
              }
              ?>
              <?php
              if(isset($_SESSION['errorr'])){
                ?>
                <div style="color: #a94442;background-color: #f2dede;border-color: #ebccd1;" class="alert alert-success alert-dismissible">
                  <a style="color:#a94442;text-decoration:none;opacity:1.2;" href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <center>
                  <i class="far fa-times-circle"></i>
                  <?php echo $_SESSION['errorr']; 
                  unset( $_SESSION['errorr']);?>
                  </center>
                </div>
                <?php
              }
              ?>
          </div>
          <div class="col-sm-2">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">View Blogs</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>#</th>
                      <th>Title:</th>
                      <th>About:</th>
                      <th>Link:</th>
                      <th>Image:</th>
                      <th>Action:</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                    <tr>
                      <?php

       include ('dbcon.php');

       $q = "select * from blog order by id desc";
       $query = mysqli_query($con, $q);
       

       while ($result = mysqli_fetch_array($query)) {
  ?>

        <tr>
        <td><?php echo $result['id']?></td>
        <td><?php echo $result['tittle']?></td>
        <td><?php echo $result['about']?></td>
        <td class="text-center"><img src="<?php echo $result['image']?>" width="80" height="80">
        <br>
        <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $result['id']?>">  
        <input type="file" name="image">
        <br><input type="submit" name="update" value="update">
        </form>
      </td>
      <td><?php echo $result['link']?></td>
        <td class="text-center">
        <a href="blogedit.php?id=<?php echo $result['id']?>"><i class="fas fa-edit"></i>&nbsp;</a>
        <a href="blogdelet.php?id=<?php echo $result['id']?>">&nbsp;<i class="fas fa-trash"></i></a>
        </td>
      </tr>

      <?php
         }
        ?>

                     
                  </tbody>
                   
                </table>
              </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
</section>
</div><!--end-->

<?php include"footer.php";?>