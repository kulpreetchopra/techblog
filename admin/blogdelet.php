<?php session_start();?>
<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM blog WHERE  id = $id ";

$d=mysqli_query($con, $q);

if($d){
    $_SESSION['succes']="Blog Deleted Successfully!!";
    header("location:viewblog.php");
  }else{
    $_SESSION['error']="Blog Deleted Unsuccessfully!!";
    header("location:viewblog.php");
    // echo "<div class='alert alert-danger'>Query Failed.</div>";
  }


?>