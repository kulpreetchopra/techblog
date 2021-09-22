<?php
error_reporting(0);
?>
<?php session_start(); ?>
<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$tittle= $_POST['tittle'];
    echo$about =$_POST['about'];
    echo$link =$_POST['link'];
    

    $filename = $_FILES['image'] ['name'];
    $tempname = $_FILES['image'] ['tmp_name'];

    $image = "blogimage/" .$filename;

    move_uploaded_file($tempname, $image);
    echo "<img src='$image' height='100' width='100' />";

    
    
}
$sql = "INSERT INTO blog(tittle,about,image,link)VALUES('$tittle','$about','$image','$link');";

  if(mysqli_query($con, $sql)){
    $_SESSION['succes']="Blog Submitted Successfully!!";
    header("location:addblog.php");
  }else{
    $_SESSION['error']="Blog Submitted Unsuccessfully!!";
    header("location:addblog.php");
    // echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
