<?php include"theme.php";?>
<?php
      include ('dbcon.php');
      $q = "select * from admin order by id desc"; 
      $query = mysqli_query($con, $q);
      $user = mysqli_fetch_assoc($query);           
     ?>
<div class="main-wrapper">
      <section class="cta-section theme-bg-light py-5">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-8">
          <h2 class="heading">A Blog Made For Best Developers <i class="fas fa-theater-masks"></i></h2>
          <div class="intro">Welcome to my blog. Subscribe and get my latest blog post.</div>

          <form action="admin/subreg.php" method="post" enctype="multipart/form-data"
          onsubmit="return subscribers()" class="signup-form form-inline justify-content-center pt-3">
                    <div class="form-group">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="remail" name="email" class="form-control mr-md-1 semail" placeholder="Enter Email">
                    </div>
                    <button type="submit" name="submit" style="background-color:<?php echo $theme['color'];?>" class="btn btn-primary">Subscribe</button>
                </form>
                <span id="sremail" class="text-danger"> </span>
        </div><!--//container-->
      <div class="col-md-4" align="left">
        <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>     
          <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="horizontal" data-theme="light" data-vanity="kulpreet-singh-chopra-9203671a4"><a class="LI-simple-link" href='https://in.linkedin.com/in/kulpreet-singh-chopra-9203671a4?trk=profile-badge'><i class="fab fa-linkedin-in fa-fw"></i></a></div>
        
      </div>
    </div>
      </section>
      <section class="blog-list px-3 py-5 p-md-5">
        <div class="container">
          <?php

       include ('dbcon.php');
      $q = "select * from blog order by id desc"; 
      $query = mysqli_query($con, $q);
      while ($result = mysqli_fetch_array($query)) {
                 
     ?>
          <div class="item mb-5">
            <div class="media">
              <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php  echo 'admin/'. $result['image']?>" style="height:120px!important;width:120px!important;" alt="image">
              <div class="media-body">
                <h3 class="title mb-1"><a href=""><?php echo $result['tittle']?></a></h3>
                <div class="meta mb-1"><span class="date"><?php echo $user['name']?></span><span class="time">Student</span><span class="date"><?php echo $result['time']?></span></div>
                <div style="text-align:justify;" class="intro"><?php echo $result['about']?></div>
                <a class="more-link" style="color:<?php echo $theme['color'];?>" href="blogdetail.php?id=<?php echo $result['id'];?>">Read more &rarr;</a>
              </div><!--//media-body-->
            </div><!--//media-->
          </div><!--//item-->
         <?php
         }
        ?>
  
          
          <nav class="blog-nav nav nav-justified my-5">
          <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
          <a style="background-color:<?php echo $theme['color'];?>" class="nav-link-next nav-item nav-link rounded" href="index.php">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
        </nav>
        
        </div>
      </section>
      <script type="text/javascript">
      function subscribers(){

      var remail=document.getElementById('remail').value;
      // email
      if(remail == ""){
        document.getElementById('sremail').innerHTML =" ** Please fill the email id field";
        return false;
      }
      if(remail.indexOf('@') <= 0 ){
        document.getElementById('sremail').innerHTML =" ** @ Invalid Position";
        return false;
      }

      if((remail.charAt(remail.length-4)!='.') && (remail.charAt(remail.length-3)!='.')){
        document.getElementById('sremail').innerHTML =" ** . Invalid Position";
        return false;
      }
      else{
      alert("Email Subscribed Successfully!!");
      }
    }
    </script>