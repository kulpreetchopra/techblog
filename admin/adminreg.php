<?php include("session.php");?>
<?php

include('dbcon.php');

  if(isset($_POST['submit'])){

    echo$name= $_POST['name'];
    echo$username =$_POST['username'];
    echo$password =$_POST['password'];
    echo$about =$_POST['about'];
    echo$twitter =$_POST['twitter'];
    echo$linkedin =$_POST['linkedin'];
    echo$facebook =$_POST['facebook'];
    echo$instagram =$_POST['instagram'];
    

    $filename = $_FILES['image'] ['name'];
    $tempname = $_FILES['image'] ['tmp_name'];

    $image = "blogimage/" .$filename;

    move_uploaded_file($tempname, $image);
    echo "<img src='$image' height='100' width='100' />";

    
    
}
$sql = "INSERT INTO admin(name,username,password,image,about,twitter,linkedin,facebook,instagram)VALUES('$name','$username','$password','$image','$about','$twitter','$linkedin','$facebook','$instagram');";

  
  if(mysqli_query($con, $sql)){
    $_SESSION['succes']="Profile Submitted Successfully!!";
    header("location:adminprofile.php");
  }else{
    $_SESSION['error']="Profile Submitted Unsuccessfully!!";
    header("location:adminprofile.php");
    // echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>
