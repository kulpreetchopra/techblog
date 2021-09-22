<?php include"theme.php";?>
<?php
      include ('dbcon.php');
      $q = "select * from admin order by id desc"; 
      $query = mysqli_query($con, $q);
      $user = mysqli_fetch_assoc($query);           
     ?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo $user['name']?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-8.css">
    <!-- font links -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- goldman  -->
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
    <!-- pacifico -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Goldman&family=Modak&family=Pacifico&display=swap" rel="stylesheet">
    <!-- rubik -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <!-- eater -->
    <link href="https://fonts.googleapis.com/css2?family=Eater&display=swap" rel="stylesheet">
    <!-- cinzel Decorative -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <!-- Patrik Hand Sc -->
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand+SC&display=swap" rel="stylesheet">
    <!-- font end -->
    <style type="text/css">
        .theme{
            font-family:<?php echo $theme['font'];?>;
      }
       #loading{
  position: fixed;
  width: 100%;
  height: 100vh;
  background: url('https://media.giphy.com/media/f9HSDNdAbzFUWjwYYN/giphy.gif')
  no-repeat center;
  z-index: 99999;
}
/* https://media.giphy.com/media/eklvCHx8TTRMweXl41/giphy.gif */
    </style>

</head> 
<body onload="myFunction()" class="theme">
  <div id="loading"></div>

      <?php
       include ('dbcon.php');
       $q = "select * from blog order by id desc"; 
       $query = mysqli_query($con, $q);
       $disp = mysqli_fetch_assoc($query);          
     ?>
    
    <header class="header text-center" style="background-color:<?php echo $theme['color'];?>">     
      <h1 class="blog-name pt-lg-4 mb-0"><a href="index.php">&nbsp;<?php echo $user['name']?> &#128519;</a></h1>
        
      <nav class="navbar navbar-expand-lg navbar-dark" >
           
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div id="navigation" class="collapse navbar-collapse flex-column" >
        <div class="profile-section pt-3 pt-lg-0">
            <img class="profile-image mb-3 rounded-circle mx-auto" src="<?php  echo 'admin/'. $user['image']?>" alt="image" style="height: 150px;width: 150px" > 
          <div class="mb-3"><i class="fas fa-theater-masks"></i> <?php echo $user['about']?><br>
              <i class="fab fa-html5"></i>
              <i class="fab fa-css3-alt"></i>  
              <i class="fab fa-js"></i> 
              <svg width="15" height="15" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="bootstrap" class="svg-inline--fa fa-bootstrap fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M292.3 311.93c0 42.41-39.72 41.43-43.92 41.43h-80.89v-81.69h80.89c42.56 0 43.92 31.9 43.92 40.26zm-50.15-73.13c.67 0 38.44 1 38.44-36.31 0-15.52-3.51-35.87-38.44-35.87h-74.66v72.18h74.66zM448 106.67v298.66A74.89 74.89 0 0 1 373.33 480H74.67A74.89 74.89 0 0 1 0 405.33V106.67A74.89 74.89 0 0 1 74.67 32h298.66A74.89 74.89 0 0 1 448 106.67zM338.05 317.86c0-21.57-6.65-58.29-49.05-67.35v-.73c22.91-9.78 37.34-28.25 37.34-55.64 0-7 2-64.78-77.6-64.78h-127v261.33c128.23 0 139.87 1.68 163.6-5.71 14.21-4.42 52.71-17.98 52.71-67.12z"></path>
              </svg>
              <i class="fab fa-react"></i>
              <i class="fab fa-php"></i> 
              <i class="fab fa-laravel"></i>
              <i class="fab fa-node"></i>
              <i class="fas fa-database"></i>
              <i class="fab fa-python"></i> <br><a class="more-link" style="text-decoration: none;color:white" href="profiledetail.php?id=<?php echo $user['id'];?>">Find Out More About Me &rarr;</a></div><!--//bio-->
          <ul class="social-list list-inline py-3 mx-auto">
                  <li class="list-inline-item"><a style="text-decoration:none;color:<?php echo $theme['color'];?>" href="<?php echo $user['twitter']?>"><i class="fab fa-twitter fa-fw"></i></a></li>
                  <li class="list-inline-item"><a style="text-decoration:none;color:<?php echo $theme['color'];?>" href="<?php echo $user['linkedin']?>"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                  <li class="list-inline-item"><a style="text-decoration:none;color:<?php echo $theme['color'];?>" href="<?php echo $user['facebook']?>"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a style="text-decoration:none;color:<?php echo $theme['color'];?>" href="<?php echo $user['instagram']?>"><i class="fab fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a style="text-decoration:none;color:<?php echo $theme['color'];?>" href="admin/index.php"><i class="fas fa-user-friends"></i></a></li>
              </ul><!--//social-list-->
              <p style="border-bottom-style: ridge;border-bottom-color: white;"></p> 
        </div><!--//profile-section-->
        
        <ul class="navbar-nav flex-column text-left">
          <li class="nav-item">
              <a style="text-decoration:none;color:white" class="nav-link" href="index.php"><i class="fas fa-home fa-fw mr-2"></i>Blog Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a style="text-decoration:none;color:white" class="nav-link" href="blogslider.php"><i class="fas fa-bookmark fa-fw mr-2"></i>Blog Post</a>
          </li>
          <li class="nav-item">
              <a style="text-decoration:none;color:white" class="nav-link" href="profiledetail.php?id=<?php echo $user['id'];?>"><i class="fas fa-user fa-fw mr-2"></i>About Me</a>
          </li>
        </ul>
        
        <div class="my-2 my-md-3">
            <a class="btn" style="text-decoration:none;color:<?php echo $theme['color'];?>;background:white" href="<?php echo $user['instagram']?>" target="_blank">Get in Touch <i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </nav>
    </header>
