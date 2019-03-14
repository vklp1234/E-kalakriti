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
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
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
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             User list
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                          <th>S.No</th>
                                            <th>Photo</th>
                                            <th>User name</th>
                                            <th>DOB</th>
                                            <th>Email Id</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      include("../config.php");
                                      $qry = "SELECT * FROM `register`";
                                      $run = mysqli_query($con,$qry);
                                      $count = 0;
                                      while($data = mysqli_fetch_assoc($run))
                                      { 
                                        $count++;
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $count; ?></td>
                                            <td><img src="../UserImages/<?php echo $data ['photo'];?>  " style="max-height:200px; max-width:150px; padding-left:5px;" /> </td>
                                            <td class="center"><?php echo $data['f_name'] ; ?></td>
                                            <td class="center"><?php echo $data['dob']; ?></td>
                                            <td class="center"><?php echo $data['email'] ?></td>
                                            <td class="center"><?php echo $data['password'] ?></td>
                                        </tr>
                                       <?php
                                       }
                                       ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
           
                
              
               
               
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
