<?php session_start();?>
<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM subscribers WHERE  id = $id ";

$d=mysqli_query($con, $q);

if($d){
    $_SESSION['succes']="Subscriber Deleted Successfully!!";
    header("location:subscribers.php");
  }else{
    $_SESSION['error']="Subscriber Deleted Unsuccessfully!!";
    header("location:subscribers.php");
    // echo "<div class='alert alert-danger'>Query Failed.</div>";
  }


?>