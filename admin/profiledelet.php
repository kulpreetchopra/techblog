<?php include("session.php");?>
<?php

include ('dbcon.php');

$id = $_GET['id'];

$q = "DELETE FROM admin WHERE  id = $id ";

$d=mysqli_query($con, $q);

if($d){
    $_SESSION['succes']="Profile Deleted Successfully!!";
    header("location:viewprofile.php");
  }else{
    $_SESSION['error']="Profile Deleted Unsuccessfully!!";
    header("location:viewprofile.php");
    // echo "<div class='alert alert-danger'>Query Failed.</div>";
  }


?>