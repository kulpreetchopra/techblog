<?php include"theme.php";?>
<?php
include ('dbcon.php');

if (isset($_GET['id']))
{
$id =$_GET['id'];
$query ="select * From admin where id=$id";
$fire =mysqli_query($con,$query);

//if($fire)echo "we got the data.";
$display = mysqli_fetch_assoc($fire);
//echo $user['password'];

}
?>
<?php include"sidebar.php";?>
<div class="main-wrapper">
	    
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
			    <header class="blog-post-header">
				    <h2 class="title mb-2"><?php echo $display['name']?><i class="fas fa-theater-masks" style="color:#fb866a;"></i></h2>
				    <div class="meta mb-3"><span class="date"><?php echo $display['name']?></span><span class="time">Student</span></div>
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <a href="#"><img class="img-fluid" src="<?php  echo 'admin/'. $display['image']?>" alt="image" style="width: 800px;height: 380px;"></a>
				        <figcaption class="mt-2 text-center image-caption">Image Credit: <?php echo $display['name']?><i class="fas fa-heart" style="color:#fb866a;"></i></figcaption>
				    </figure>
				    <p><?php echo $display['about']?><br>
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
				    	<i class="fab fa-python"></i> </p>
				    <pre>
					    <code>
					    </code>
					</pre>
				</div>
			</div>
		</article>
	</div>
<?php include"footer.php";?>