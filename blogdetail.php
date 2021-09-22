<?php include"theme.php";?>
<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From blog where id=$id";
$fire =mysqli_query($con,$query);

//if($fire)echo "we got the data.";
$display = mysqli_fetch_assoc($fire);
//echo $user['password'];

}
?>
<?php
      include ('dbcon.php');
      $q = "select * from admin order by id desc"; 
      $query = mysqli_query($con, $q);
      $user = mysqli_fetch_assoc($query);           
     ?>
<?php include"sidebar.php";?>
<div class="main-wrapper">
	    
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
			    <header class="blog-post-header">
				    <h2 class="title mb-2"><?php echo $display['tittle']?> <i class="far fa-file-code" style="color:#fb866a;"></i></h2>
				    <div class="meta mb-3"><span class="date"><?php echo $user['name']?></span><span class="time">Student</span><span class="date"><?php echo $display['time']?></span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <a href="#"><img class="img-fluid" src="<?php  echo 'admin/'. $display['image']?>" alt="image" style="width: 800px;height: 380px;"></a>
				        <figcaption class="mt-2 text-center image-caption">Image Credit: <?php echo $user['name']?><i class="fas fa-heart" style="color:#fb866a;"></i></figcaption>
				    </figure>
				    <h4><a style="color:<?php echo $theme['color'];?>" href="http://<?php echo $display['link']?>"><?php echo $display['link'];
				    $icon="fas fa-mouse-pointer"; 
                    if($display['link']==""){
                    	$icon=" ";
                    }
				    ?> <i class="<?php echo$icon ?>"></i></a></h4>
				    <p><?php echo $display['about']?></p>
				    <pre>
					    <code>
					    </code>
					</pre>
				</div>
			</div>
		</article>
	</div>
<?php include"footer.php";?>