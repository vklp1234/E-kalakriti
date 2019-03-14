<?php
  include ("../config.php");
  session_start();
  if(isset($_SESSION['userid'])){
    
  }else{
    header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>E-kalakriti Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">E-kalakriti</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2015 &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a  href="dashboard.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     
                     <li  >
                        <a   href="add_admin.php"><i class="fa fa-laptop fa-3x"></i> Add_admin </a>
                    </li>     
                  
                            
                        
                     <li  >
                        <a   href="registeration.php"><i class="fa fa-laptop fa-3x"></i> Registeration list</a>
                    </li>   
                                       
                        
                     <li  >
                        <a   href="upload.php"><i class="fa fa-laptop fa-3x"></i> upload product </a>
                    </li>   
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                       <h2>Admin Dashboard</h2>   
                        <h5>Welcome E-kalakriti </h5>
                       
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           ADD PRODUCT
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                   
                                    <form role="form" name="form4" enctype="multipart/form-data" method="POST" action="upload.php" >
                                        <div class="form-group">
                                            <label>Product ID</label>
                                            <input class="form-control" placeholder="Enter Product Id " type="text" name="p_id" />
                                           
                                        </div>
                                         <div class="form-group">
                                            <label>Product Catagory</label>
                                            <select class="form-control" name="p_cat">
                                              <option value="">Choose Any One Catagory Of a Product</option>
                                                <option value="Handmade">Hand Made Art</option>
                                                <option value="metalart">Metal Art</option>
                                                <option value="painting">Painting</option>
                                                <option value="woodcraf">Wood Craft</option>
                                                <option value="Bombowork">Bombo And Cane Work</option>
                                                <option value="Terracotta">Terracotta</option>
                                                <option value="toys">Toy And Dolls</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input class="form-control" placeholder="Product Name" name="p_name" type="text"/>
                                        </div>
                                         <div class="form-group">
                                            <label>Quantity of Product </label>
                                            <input class="form-control" placeholder="Quantity" name="p_Qty" type="text"/>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Upload Product Image</label>
                                            <input type="file" name="p_img" />
                                        </div>
                                        <div class="form-group">
                                            <label>Product Description</label>
                                            <br>
                                            <textarea style=" width: 100%; border: 2px solid #dddddd;border-radius: 7px;    font-size: 14px;" name="Desc"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Price</label>
                                            <input class="form-control" placeholder=" &#8377; XXX/-" type="text" name="price" />
                                        </div>
                                        
                                        
                                       
                                       
                                        <input type="submit" class="btn btn-default" name="submit" value="Submit" />
                                        <input type="reset" class="btn btn-primary" name="Reset" value="Reset" />

                                    </form>
                                    <br />
                                     
                                   
                                 
    </div>
 <!-- <form role="form">
  <div class=" form-group input-group input-group-lg">
   <div class="form-group">
    <label>Product Name</label>
      <input class="form-control" placeholder="Product Name" type="text"/>
    </div>
</div>


                                         
                                     </form> -->
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <h3>More Customization</h3>
                         <p>
                        For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com 
                        </p>
                    </div>
                </div>
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>

</html>
<?php
include("../config.php");
if(isset($_POST['submit']))
{
    $id = $_POST['p_id'];
    $name = $_POST['p_name'];
    $qunty = $_POST['p_Qty'];
     $imagename = $_FILES['p_img']['name'];
    $tempname =$_FILES['p_img']['tmp_name'];
    
    move_uploaded_file($tempname,"Uploded_product_image/$imagename");
    $type = $_POST['p_cat'];
    $disc = $_POST['Desc'];
    $rang = $_POST['price'];
    $qry = "INSERT INTO `product`(`p_id`, `p_name`,`Quantity`, `p_upload`, `description`, `price`, `p_type`) VALUES ('$id','$name','$qunty','$imagename','$disc','$rang','$type')";
    
    if(!$run= mysqli_query($con,$qry))
    {
        echo "Not Working";
        var_dump($con->error);
    }
    if($run == true)
    {

      ?>
      <script>
      alert('Product Uploaded Successfully.');
      </script>
      <?php
    }
    else{
       ?>
      <script>
      alert('Product has Allready In Product List');
      </script>
      <?php
    }
}



?>