<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$email= $_POST['email'];
    
}
$sql = "INSERT INTO subscribers(email)VALUES('$email');";

  
  if(mysqli_query($con, $sql)){
    header("location:../index.php");
  }else{
    header("location:../index.php");
  }

?>
