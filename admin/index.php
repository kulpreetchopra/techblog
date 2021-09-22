<?php
session_start();
?>
<?php include"../theme.php";?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Art Blogger | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="shortcut icon" href="../favicon.ico">
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
  </style>
  <style type="text/css">
    .bg{
    background-color:<?php echo $theme['color'];?>;
    }
    .theme{
            font-family:<?php echo $theme['font'];?>;
      }
  </style>
</head>
<body class="hold-transition login-page bg theme">
<div class="login-box">
  <div class="login-logo">
    <h1 class="blog-name pt-lg-4 mb-0" style="color: white">Admin Profile</h1>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body"style="background-image: url(../image/card1.png);
    background-repeat: no-repeat;
    background-size: cover;">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="login.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Enter Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Enter Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-7">
            <button type="submit" name="login" class="btn btn-success btn-block">Sign In</button>
            </div>
          <!-- /.col -->
          <div class="col-5">
            <a href="../index.php" class="btn btn-block btn-primary">Blog Home
        </a>
          
          <!-- /.col -->
        </div>
      </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
