<?php include"theme.php";?>
<?php
      include ('dbcon.php');
      $q = "select * from admin order by id desc"; 
      $query = mysqli_query($con, $q);
      $user = mysqli_fetch_assoc($query);           
     ?>
<footer class="footer text-center py-2 " style="background-color:<?php echo $theme['shade'];?>">
          <center>
                <small style="color:white;" class="copyright">Designed & Developed with <i style="color:#fb866a" class="fas fa-heart"></i> by <a href="#"><?php echo $user['name']?></a></small>
          </center>
      </footer>
    
    </div><!--//main-wrapper-->   
    <!-- Javascript --> 
    <script type="text/javascript">
      // loader
var preloader=document.getElementById('loading');

  function myFunction(){
    preloader.style.display= 'none';
  }
  // modal
$(document).ready(function(){
    $('#mymodel').modal('show');
  });
    </script>         
    <script src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="assets/js/demo/style-switcher.js"></script>     
</body>
</html> 

