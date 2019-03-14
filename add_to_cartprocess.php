<?php
session_start();
if(isset($_SESSION['usern']))
{
	include("config.php");
	$qrye = $_SESSION['usern'];
						$erw = "SELECT * FROM `user_login` WHERE `mobile`='$qrye' OR `username`='$qrye'";
						$runers = mysqli_query($con,$erw);	
						$fetch = mysqli_fetch_assoc($runers);
						$mobile_no_u = $fetch['mobile'];
						//echo "$mobile_no_u";

	$product_id= $_GET['id_no'];
	$qry = "SELECT * FROM `product` WHERE `p_id`='$product_id'";
	$run = mysqli_query($con,$qry);
	if($data=mysqli_fetch_assoc($run) )
	{
		$mobile_no_u = $fetch['mobile'];
			//echo "$mobile_no_u";			
		$pro_id = $data['p_id'];
		$pro_name = $data['p_name'];
		$pro_qty = $data['Quantity'];
		$pro_img = $data['p_upload'];
		$pro_desc = $data['description'];
		$pro_price = $data['price'];
		$pro_cat = $data['p_type'];



		$qry2 = "INSERT INTO `add_to_cart`(`mobile`,`p_id`, `p_name`, `Quantity`, `p_image`, `description`, `price`, `p_type`) VALUES ('$mobile_no_u', '$pro_id','$pro_name','1','$pro_img','$pro_desc','$pro_price','$pro_cat')";
		if(!$run2 = mysqli_query($con,$qry2))
		{
			
				var_dump($con->error);
				?>
				<script type="text/javascript">
		alert("Your Item Allready In Cart");
		//window.open('cart.php?product=<?php echo "$pro_id"?>','_self');
	</script>

	
	<?php



		}
		if($run2 == true)
		{
			?>

	<script type="text/javascript">
		
		window.open('cart.php?product=<?php echo "$pro_id"?>','_self');
	</script>
	<?php
		}
			


	}

}
else{
	
	?>

	<script type="text/javascript">
		alert("Please First Login Then Be Are Select Item");
		window.open('login.php','_self');
	</script>
	<?php
}

?>