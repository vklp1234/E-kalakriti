<?php
session_start();
if(isset($_SESSION['usern']))
{

}
else{

	?>

	<script type="text/javascript">
		alert("Please First Login Then See Your Cart");
		window.open('login.php','_self');
	</script>
	<?php
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
	</div>
<!-- Body Section -->
 <div class="row">
  <div class="span12">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Check Out</li>
    </ul>
    <?php  
    		if(isset($_SESSION['usern']))
    		{
    			$var1 = $_SESSION['usern'];
    			$qryr = "SELECT * FROM `register` WHERE `Mobile_no`='$var1' OR `email`='$var1'";
    			$runings = mysqli_query($con,$qryr);
    			if($fetching  = mysqli_fetch_assoc($runings))
    			{
    				$tempr=$fetching['Mobile_no'];
    				?>

    				<div class="well well-small">
		<h1>Check Out <small class="pull-right">Shipping Details  </small></h1>
		<div class="unhsjd">
		<large class="pull-right">Name: <?php echo $fetching['f_name'];?></large>
		<br>
		<large class="pull-right">Address: <?php echo $fetching['address'];?></large>
		<br>
		<large class="pull-right">Contact No: <?php echo $fetching['Mobile_no'];?></large>
		</div>
	
	


    				<?php			
    			} 
    		}
    ?>
		


	<table class="table table-bordered table-condensed">
             
                <tr>
                	<th>S.No</th>
                  <th>Product Image</th>
                  <th>Description</th>
				  
                  
                  <th>Unit price</th>
                  <th>Quantity </th>
                  <th>Total</th>

                  
				</tr>
            


              <?php
include("config.php");
$var1 = $_SESSION['usern'];
    			$qryr = "SELECT * FROM `register` WHERE `Mobile_no`='$var1' OR `email`='$var1'";
    			$runings = mysqli_query($con,$qryr);
    			$fetching  = mysqli_fetch_assoc($runings);
    			$var6 = $fetching['Mobile_no'];

$qry = "SELECT p_name,p_id,description,price,Quantity,p_image, (Quantity*price) total_amt FROM `add_to_cart` where mobile = '$var6'";
//echo "$qry";
$run = mysqli_query($con,$qry);
$count =0;
while($data = mysqli_fetch_assoc($run))
{
	$ide = $data['p_id'];
	$count++;
	?>

               <tr>
                	<td><?php echo $count;?></td>
                  <td><img width="100" src="admin/Uploded_product_image/<?php echo $data ['p_image'];?>" ></td>
                  <td>
                  	<strong>Product Name:</strong><?php echo $data['p_name'];?>
                  	<br>
                  	<strong>Product Id:</strong><?php echo $data['p_id'];?>
              		<br>
              		<strong>Product description:</strong><?php echo $data['description'];?>
              	</td>
                  
                  <td><?php echo "&#8377; "; echo $data['price'];echo "/-"?></td>
                  <td>
                  	
                  	<?php echo $data['Quantity'];?>
                  	<br>
                  	<a href="Quntity.php?pro=<?php echo $ide?>">Update Quantity</a>


                  	

                  </td>
                  <td>
                  	<?php echo $data['total_amt'];?>
                  </td>

                </tr>
                
				<?php 

   	}
   
   	
            ?>
					

                  		<strong></strong>


            
            </table><br/>
       
		<?php  
    		if(isset($_SESSION['usern']))
    		{
    			$var2 = $_SESSION['usern'];
    			$qryr1 = "SELECT sum(Quantity*price) total_sum from add_to_cart WHERE `mobile`='$tempr' ";
    			$runings1 = mysqli_query($con,$qryr1);
    			if($fetching1  = mysqli_fetch_assoc($runings1))
    			{
    				?>

		
		<a href="index.php" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
		<large class="pull-right">Total Amount: <?php echo $fetching1['total_sum'];?></large>
	<a href="#" class="shopBtn btn-large ">Proceed to payment<span class="icon-arrow-right"></span></a>
		

	
	


    				<?php			
    			} 
    		}
    ?>
		
            
	

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
<a href="about_us.php">ABOUT US</a><br>
 </div>
<div class="span2">
<h5>Our Offer</h5>
<a href="products.php">NEW PRODUCTS</a> <br>
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
		<a href="#"><img src="exter/img/mc.png" alt="payment"></a>
		<a href="#"><img src="exter/img/pp.png" alt="payment"></a>
		<a href="#"><img src="exter/img/visa.png" alt="payment"></a>
		<a href="#"><img src="exter/img/disc.png" alt="payment"></a>
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
