<?php

session_start();
if(isset($_SESSION['usern']))
{
	Header('location:index.php');
}



?>
<!DOCTYPE php>
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
  <script type="text/javascript">
  	function validation()
  	{
  		var empty = document.form1.email.value;
  		var empty1 = document.form1.pass.value;
  		if(empty == "")
  		{
  			alert("Please Enter Your Email Address");
  			return false;
  		}
  		else
  		{
  			return true;
  		}
  		if(empty1 == "")
  		{
  			alert("Please Enter Your Email Address");
  			return false;
  		}
  		else{
  			return true; 
  		}
  	}
  </script>
<body>
<!-- Upper Header Section -->
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

<!--Lower Header Section -->
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

<!--Navigation Bar Section -->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
			  <li class="nav-item"><a href="about_us.php" class="nav-link">About</a></li>
			  <li class=""><a href="gallery.php">Gallery</a></li>
			  <li class=""><a href="event.php">Event</a></li>
			  <li class=""><a href="contact.php">Content</a></li>
			  <li class=""><a href="history.php">Art history</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right ">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">


				<form class="form-horizontal loginFrm" name="form1" onsubmit="validation()" method="post" action="login.php">
				  <div class="control-group">
					<input type="text" class="span2" name="email" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" name="pass" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
					<input  name="login" type="submit" class="shopBtn btn-block" value="Sign in ">
				  </div>
				</form>


				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<!-- 
Body Section 
-->
	<div class="row">
<div id="sidebar" class="span3">
<div class="well ">
	<h2>Product Category</h2>
	<ul class="nav nav-list">
		<li><a href="hand_made.php?cata=Handmade"><span class="icon-chevron-right"></span>Hand made art</a></li>
		<li><a href="metal.php?cata2=metalart"><span class="icon-chevron-right"></span>Metal art</a></li>
		<li><a href="painting.php?cata3=painting"><span class="icon-chevron-right"></span>Paintings</a></li>
		<li><a href="wood.php?cata4=woodcraf"><span class="icon-chevron-right"></span>Wood Craft</a></li>
		<li><a href="bombo.php?cata5=Bombowork"><span class="icon-chevron-right"></span>Bombo And Cane Work</a></li>
		<li><a href="terracotta.php?cata6=Terracotta"><span class="icon-chevron-right"></span>Terracotta</a></li>
		
		<li><a href="doll.php?cata7=toys"><span class="icon-chevron-right"></span>Toy and Dolls</a></li>
		
		<li style="border:0"> </li>
		
	</ul>
</div>

			  
			  
			
			
			<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="exter/img/toys6.jpg" alt="ecommerce ">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right">RS 22.00</span></h4>
				</div>
			  </div>
			</li>
			
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="exter/img/imp-3128700_960_720.png" alt="xyz">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right">RS 22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>


	<h3> Login</h3>	
	<hr class="soft"/>
	
	<div class="row">
		
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>Login</h5>
			<form method="post" name="form7" action="login.php"><!-- this is login area/form -->
			  <div class="control-group">
				<label class="control-label" for="inputEmail">Email/Mobile</label>
				<div class="controls">
				  <input class="span3"  type="text" placeholder="Email" name="email">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
				  <input type="password" class="span3" placeholder="Password" name="password">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <input type="submit" name="Login" value="login" class="defaultBtn" /> <a href="#">Forget password?</a>
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <strong>If You Are Not Register?</strong><a href="register.php">Sign Up</a>
				</div>
			  </div>
			</form>

		</div>
		</div>
	</div>	
	
</div>
</div>
<!-- 
Clients 
-->
<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Manufactures</span></h4>
	<hr class="soften"/>
	<div class="row">
		<div class="span2">
			<a href="#"><img alt="" src="exter/img/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="exter/img/2.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="exter/img/3.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="exter/img/4.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="exter/img/5.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="exter/img/6.png"></a>
		</div>
	</div>
</section>

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
<h5>The standard chunk of Lorem</h5>
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
 those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et 
 Malorum" by Cicero are also reproduced in their exact original form, 
accompanied by English versions from the 1914 translation by H. Rackham.
 </div>
 </div>
</footer>
</div><!-- /container -->

<div class="copyright">
<div class="container">
	<p class="pull-right">
		<a href="#"><img src="assets/img/maestro.png" alt="payment"></a>
		<a href="#"><img src="assets/img/mc.png" alt="payment"></a>
		<a href="#"><img src="assets/img/pp.png" alt="payment"></a>
		<a href="#"><img src="assets/img/visa.png" alt="payment"></a>
		<a href="#"><img src="assets/img/disc.png" alt="payment"></a>
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
<?php
include("config.php");
if(isset($_POST['Login']))
{
	$uname = $_POST['email'];
	$pass = $_POST['password'];
	$qry = "SELECT * FROM `user_login` WHERE `username`='$uname' OR `mobile`='$uname' AND `password`='$pass'";
	if(!$run = mysqli_query($con,$qry))
	{

		  var_dump($con->error);
	}
	$row1 = mysqli_num_rows($run);
		  if ($row1<1)
		  {

		    ?>
		    <script type="text/javascript">
		      alert("Email And Password Are Not Match");
		      window.open('login.php','_self');
		    </script>
		     <?php
		 
		    
		  }
		  else
		  {
		  	session_start();
		  	$_SESSION['usern'] = $uname;
		  ?>
		    <script type="text/javascript">
		     
		      window.open('index.php','_self');
		    </script>
		     <?php
		 
		  }
		  


}

?>