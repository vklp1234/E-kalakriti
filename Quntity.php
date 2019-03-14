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
<?php
include("config.php");
$pro_no = $_GET['pro'];
$sql="SELECT * FROM `add_to_cart` WHERE `p_id`='$pro_no'";
	$run=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quntity select</title>
	<meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="exter/css/bootstrap.css" rel="stylesheet"/>
	<link href="exter/css/bootstrap-responsive.css" rel="stylesheet"/>
    <!-- Customize styles -->
    
    <!-- font awesome styles -->
	<link href="exter/font-awesome/css/font-awesome.css" rel="stylesheet">
	<!-- Favicons -->
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.ico"> -->
  </head>
</head>
<body>
<form action="" method="POST">
	<div class="container">
		<center style="margin:300px auto;"><strong>Enter Selected product Qunatity</strong>
		<input type="text" name="qty" placeholder="Enter  product Qunatity">
		<input type="hidden" name="prid" value=<?php echo $data['p_id']; ?> >
		<input type="submit" class="btn btn-success" name="save" value="Update">
	</div>
</center>
	
</form>
</body>
</html>
<?php
				if(isset($_SESSION['usern']))
					{
						include('config.php');
						$qrye = $_SESSION['usern'];
						$erw = "SELECT * FROM `user_login` WHERE `mobile`='$qrye' OR `username`='$qrye'";
						$runers = mysqli_query($con,$erw);	
						$fetch = mysqli_fetch_assoc($runers);
						$no = $fetch['mobile'];
						echo "$no";
					}
						?>


<?php


include('config.php');
if(isset($_POST['save']))
{
	$ro_no = $_POST['prid'];
	$pro_q = $_POST['qty'];
	$qryeo = "UPDATE `add_to_cart` SET `Quantity`='$pro_q' WHERE `mobile`='$no' AND `p_id`='$ro_no'";
	echo "$qryeo";
	if(!$rung = mysqli_query($con,$qryeo))
	{
		var_dump($con->error);
	}
	if($rung == true)
	{
		?>


	<script type="text/javascript">
		alert("Your Quantity is : <?php echo $pro_q; ?> Updated");
		window.open('cart.php','_self');
	</script>
	<?php

		
	}

}
?>