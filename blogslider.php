<?php include"theme.php";?>
<?php
      include ('dbcon.php');
      $q = "select * from admin order by id desc"; 
      $query = mysqli_query($con, $q);
      $user = mysqli_fetch_assoc($query);           
     ?>
<?php include"sidebar.php";?>
<div class="main-wrapper">

	    <div class="carousel slide " data-ride="carousel" id="myslide">
  <div class="carousel-inner imgmobile">
    <?php
       include ('dbcon.php');
       $q = "select * from blog order by id desc"; 
       $query = mysqli_query($con, $q);
       $status ="active";
       $j=0;
       while ($result = mysqli_fetch_array($query)) {
        if($j==0){
          $status ="active";
        }
        else{
          $status =" ";
        }
        ?>
        <div class="carousel-item <?php echo $status ?>" data-interval="3000">
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
			    <header class="blog-post-header">
				    <h2 class="title mb-2"><?php echo $result['tittle']?> <i class="far fa-file-code" style="color:#fb866a;"></i></h2>
				    <div class="meta mb-3"><span class="date"><?php echo $user['name']?></span><span class="time">Student</span><span class="date"><?php echo $result['time']?></span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <a href="#"><img class="img-fluid" src="<?php  echo 'admin/'. $result['image']?>" alt="image" style="width: 800px;height: 380px;"></a>
				        <figcaption class="mt-2 text-center image-caption">Image Credit: <?php echo $user['name']?><i class="fas fa-heart" style="color:#fb866a;"></i></figcaption>
				    </figure>
				    <h4><a style="color:<?php echo $theme['color'];?>" href="http://<?php echo $result['link']?>"><?php echo $result['link'];
				    $icon="fas fa-mouse-pointer"; 
                    if($result['link']==""){
                    	$icon=" ";
                    }
				    ?> <i class="<?php echo$icon ?>"></i></a></h4>
				    <p style="text-align:justify"><?php echo $result['about']?></p>
				    <pre>
					    <code>
					    </code>
					</pre>
				</div>
			</div>
		</article>
		</div>
		<?php
    $j++;
  }
  ?>
  </div><!-- end  carousel-inner-->
<a href="#myslide" data-slide="prev" class="carousel-control-prev">
	<i style="color:<?php echo $theme['color']?>!important;font-size:40px!important;" class="fas fa-chevron-circle-left"></i>
</a>
<a href="#myslide" style="color:red;" data-slide="next" class="carousel-control-next">
	<i style="color:<?php echo $theme['color']?>!important;font-size:40px!important;" class="fas fa-chevron-circle-right"></i>
</a>
</div><!--  carousel slide end-->
</div><!--  carousel slide end-->
	</div>
<?php include"footer.php";?>