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
                           Add New Admin Account
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                
                                    <form role="form" action="add_admin.php" onsubmit="validation()" enctype="multipart/form-data" method="POST" name="Form3">
                                        <div class="form-group">
                                            <label>Name</label> 
                                            <input class="form-control" type="name" name="name" required="required" />
                                         
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>username</label>
                                           <input class="form-control" type="email" name="usern" required="required" />
                                         
                                        </div>
										 <div class="form-group">
                                            <label>Password</label>
                                           <input class="form-control" type="password" name="pass" required="required"  />
                                         
                                        </div>
                                        <div class="form-group">
                                            <label>Photo Upload</label>
                                            <input type="file"  name="img" required="required" />
                                        </div>
                                        
                                       
                                        
                                        
                                        
                                   
                                        <input type="submit" class="btn btn-default" name="submit" value="Add" />
                                        <input type="reset" class="btn btn-primary" name="reset" value="Reset" />

                                    </form>
                                    <br />
                                     
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
    <script type="text/javascript">
      function validation()
      {
        var empty = document.Form3.name.value;
    var empty1 = document.Form3.pass.value;
    var empty2 = document.Form3.img.value; 
    var empty3 = document.Form3.username.value;
    
        if(empty3 == "")
          {
              alert("please enter username/email");
              return false;
            }
            else
            {
                  if(empty1 == "")
                  {
                    alert("please enter password");
                    return false;
                  }
                  else
                  {
                    if( empty2 == "")
                    {
                      alert("please choose a image");
                    return false;
                    }
                    else
                    {
                      if(empty =="")
                      {
                        alert("Please enter Your Name");
                        return false;
                      }
                      else{
                        return true;
                      }
                    }
                  }
              
            }
      }
  
    </script>
    
   
</body>
</html>
<?php
include("../config.php");
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $usern = $_POST['usern'];
  $password = $_POST['pass'];
  $imagename = $_FILES['img']['name'];
    $tempname =$_FILES['img']['tmp_name'];
    
    move_uploaded_file($tempname,"Dataimages/$imagename");
    $add_qry = "INSERT INTO `admin_login`(`username`, `pass`) VALUES ('$usern','$password')";
    $qry ="INSERT INTO `add_admin`(`name`, `username`, `password`, `photo`) VALUES ('$name','$usern','$password','$imagename')";
    //echo $qry;
    $runer=mysqli_query($con,$add_qry);
    $run = mysqli_query($con,$qry);
    if($run == true)
    {
      
      ?>
      <script>
      alert('Data Inserted Successfully.');
      </script>
      <?php
    }
}




?>
