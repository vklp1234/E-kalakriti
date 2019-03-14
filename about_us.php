<?php
session_start();
if(isset($_SESSION['usern']))
{

}


?>
<!DOCTYPE html>
<html lang="en">
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
    <style type="text/css">
    	.back{
    		background: #fff;
    	}
    </style>
  </head>

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
	<p><br> <strong style="color: #;"> Support (24/7) :  0000 1234 6780800 1234 678 </strong><br><br></p>
	
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
		 <ul class="nav">
			  <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
			  <li class="nav-item"><a href="about_us.html" class="nav-link">About</a></li>
			  <li class=""><a href="gallery.html">Gallery</a></li>
			  <li class=""><a href="event.html">Event</a></li>
			  <li class=""><a href="contact.html">Content</a></li>
			  <li class=""><a href="history.html">Art history</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right ">       
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
					<button type="submit" class="shopBtn btn-block"><a href="admin/index.html">Sign in</a></button>
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
	<hr class="soften">
	<div class="well">
		<h1>About us</h1>
	</div>

	<hr class="soften ">
	<div class="back well">
	<div class="row">
	 <img src="exter/img/transfor-3.jpg" alt="" style="padding:30px; width:250px;" >
	 
		<div class="span8">
		  <h6>
			
		  </h6>
		  <p>
			Many Art shopping website in which we can purchase a product online but in which we cannot earn money and this website of website is only used by a medium and higher level of people. So the concept of E-KALAKRITI is different from all shopping website because this website is sale M.P. Art  and not grocery etc. this website is sale a traditional things like a traditional khadi sarees. Etc.<br>
			<br>
			A lower level user than can be famous in any designing of mates that can be made by old saris’. This made is taken by E-KALAKRITI and sale a given mates in a E-KALAKRITI because of this purpose that used has easily earn money in E-KALAKRITI.
			<br>
			This project is started as a ground level by meting some  Retailers etc.beacause  if can join a user in website for sealing it product so if retailer see the work of user if  the given mates is good so retailer is directly contact to a given users.
			<br>
			E-kalakriti this website is based on traditional things in which peoples belonging from traditional, rural, urban cities are give jobs according to their eligibility and work expenance.
			<br>
			Through this website an old and traditional value things are prepared and also prepared new and creative things from those things which are west and have no use in our day life<br>
			E-KALAKRITI is a web-based project which is made for remote-shopping or shopping through Internet. As the technology is being advanced the way of life is changing accordance. Now a day’s we can place the order for  thing from our home. There is no need to go the shop of the things we want. The order can be placed online through Internet. The payment, the confirmation of purchasing; we can do everything  we want. Now we can think that how the days have been changed with time. People had to stand in rows to wait there terms to buy a particular thing from a popular shop. But what is happening now a day’s; we can extremely surprise that those things can be available on the door-step in few hours. People had to suffer the rush of the market when they went for shopping. They used to think hundred times to buy anything having the sufficient money for shopping. The problem was the rush; the quarrel at the time of buying the things. But the advancement of technology brought the new way for shopping. The way of shopping was completely changed with the coming of Internet Technology. People have to fill a simple form on the internet to place their order on any popular shop or shopping-mall for the thing they want to buy. Now they can place their order from the home. This project entitled “E-KALAKRITI” is an implementation of the above description.
		  </p>
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
<a href="contact.html">CONTACT</a><br>
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
</html>