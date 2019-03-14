<?php
session_start();
if(isset($_SESSION['usern']))
{

}


?><!DOCTYPE php>
<php lang="en">
   <head>
    <meta charset="utf-8">
    <title>UIT Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="exter/css/bootstrap.css" rel="stylesheet"/>
	<link href="exter/css/bootstrap-responsive.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="exter/font-awesome/css/font-awesome.css" rel="stylesheet">
	<!-- Favicons -->
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.ico"> -->
  </head>
  
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>
				<a class="active" href="index.php"> <span class="icon-home"></span> Home</a> 
				<a href="admin/index.php"><span class="icon-user"></span> Admin</a> 
				<a href="register.php"><span class="icon-edit"></span> Free Register </a> 
				<a  href="login.php"><span class="icon-lock"></span> Login</a>
				<a href="contact.php"><span class="icon-envelope"></span> Contact us</a>
				<a href="cart.php"><span class="icon-shopping-cart"></span>Show Cart</a>
				<?php
				if(isset($_SESSION['usern']))
					{
						include('config.php');
						$qrye = $_SESSION['usern'];
						$erw = "SELECT * FROM `user_login` WHERE `mobile`='$qrye' OR `username`='$qrye'";
						$runers = mysqli_query($con,$erw);	
						$fetch = mysqli_fetch_assoc($runers);
						?>

				<a href="u_logout.php"><span class="fa-circle-logout"></span>logout</a>
				<label> Wellcome:   <?php echo $fetch['name']; echo " "; echo $fetch['mobile'];?></label>


				<?php
					}
				?>

			</div>
		</div>
	</div>
</div>


<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="index.php"><span></span> 
				<marquee direction="alternate" scrolldelay="200" scrollamount="3"><img src="exter/img/9.png" alt="logo">
	</a></marquee>
	</h1>
	</div>
	<div class="span4">
	
	</div>
	<div class="span4 alignR">
	<p><br> <strong style="color: #;"> Support (24/7) :  0000 1234 678 </strong><br><br></p>
	
	</div>
</div>
</header>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<div class="nav-collapse">
			<ul class="nav">
			  <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
			  <li class="nav-item"><a href="about_us.php" class="nav-link">About</a></li>
			  <li class=""><a href="#">Gallery</a></li>
			  <li class=""><a href="event.php">Event</a></li>
			  <li class=""><a href="contact.php">Content</a></li>
			  <li class=""><a href="history.php">Art history</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
					<button type="submit" class="shopBtn btn-block"><a href="admin/index.php">Sign in</a></button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div></div>
<!-- 
Body Section 
-->

	<h3>TERRACOTTA </h3>
		<ul class="thumbnails">
			<ul class="thumbnails">
			<?php
include('config.php');
$cat = $_GET['cata6'];
$sql="SELECT * FROM `product` WHERE `p_type`='$cat'";

	$run=mysqli_query($con,$sql);
	while($data=mysqli_fetch_assoc($run))
{

?>

			<li class="span4">
			  <div class="thumbnail">
				<a href="product_details.php" class="overlay"></a>
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="product_details.php"><img src="admin/Uploded_product_image/<?php echo $data ['p_upload'];?>  " style="max-height:100%; max-width:100%; " ></a>
				<div class="caption cntr">
					<p><?php echo $data['p_name'];?></p>
					<p><strong> <?php echo "&#8377; "; echo $data['price'];echo "/-"?></strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<?php
			}
			?>
		</ul>
			



<!--
Footer
-->
<footer class="footer">
<div class="row-fluid">
<div class="span2">
<h5>Your Account</h5>
<a href="#">YOUR ACCOUNT</a><br>
<a href="#">PERSONAL INFORMATION</a><br>
<a href="#">ADDRESSES</a><br>
<a href="#">DISCOUNT</a><br>
<a href="#">ORDER HISTORY</a><br>
 </div>
<div class="span2">
<h5>Iinformation</h5>
<a href="contact.php">CONTACT</a><br>
<a href="#">SITEMAP</a><br>
<a href="#">LEGAL NOTICE</a><br>
<a href="#">TERMS AND CONDITIONS</a><br>
<a href="#">ABOUT US</a><br>
 </div>
<div class="span2">
<h5>Our Offer</h5>
<a href="#">NEW PRODUCTS</a> <br>
<a href="#">TOP SELLERS</a><br>
<a href="#">SPECIALS</a><br>
<a href="#">MANUFACTURERS</a><br>
<a href="#">SUPPLIERS</a> <br/>
 </div>
 <div class="span6">
<h5>The standard chunk </h5>
 </div>
 </div>
</footer>
</div><!-- /container -->

<div class="copyright">
<div class="container">
	<p class="pull-right">
		<a href="#"><img src="exter/img/maestro.png" alt="payment"></a>
		<a href="#"><img src="exter/mc.png" alt="payment"></a>
		<a href="#"><img src="exter/pp.png" alt="payment"></a>
		<a href="#"><img src="exter/img/visa.png" alt="payment"></a>
		
	</p>
	<span>Copyright &copy; 2018<br> E-kalakriti </span>
</div>
</div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="exter/js/jquery.js"></script>
	<script src="exter/js/bootstrap.min.js"></script>
	<script src="exter/js/jquery.easing-1.3.min.js"></script>
    <script src="exter/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="exter/js/shop.js"></script>
  </body>
</php>