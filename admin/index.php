<?php
session_start();
if(isset($_SESSION['userid']))
{
  header('location: dashboard');
}



?>
<!DOCTYPE html>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
	<!-- BOOTSTRAP STYLES-->
        <link href="../css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
     <link href="../css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="../css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2>Admin : Login</h2>
               
                <h5>( Login yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">                      
                            </div>
                            <div class="panel-body">
                                <form role="form" name="form2" onsubmit="valid()" action="index.php" method="POST">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                            <input type="text/email" class="form-control" placeholder="Your Username " name="username" autofocus="autofocus" />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Your Password" name="password" autocomplete="off"/>
                                        </div>
                                    <div class="form-group">
<!--                                            <label class="checkbox-inline">
                                                <input type="checkbox" required/> Remember me
                                            </label>-->
                                         <span class="pull-right">
                                             <a href="#change_pass.php" >Forget password ? </a> 
                                         </span>
                                        </div>
                                       <div align="center"> 
                                           <input type="submit" class="btn btn-primary" name="submit" value="Login" >
                                       </div>
<!--                                    <hr />-->
<!--                                    Not register ? <a href="registeration.html" >click here </a> -->
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
<script type="text/javascript">
  function valid()
  {
    var empty = document.form2.username.value;
    var empty1 = document.form2.password.value;
    
    if( empty1 == "" && empty == "" )
      {
        alert("please enter username and password");
      return false;
      }else
      {
        if(empty == "")
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
                    if( empty1 == "" && empty == "" )
                    {
                      alert("please enter username and password");
                    return false;
                    }
                  }
              
            }
      }
  }
</script>

     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
      <script src="../js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
      <script src="../js/custom.js"></script>
    </body>
</html>
<?php
include("../config.php");
if(isset($_POST['submit']))
{
  $user = $_POST['username'];
  $Pass = $_POST['password'];
  $Qry = "SELECT * FROM `admin_login` WHERE `username`='$user' AND `pass` = '$Pass'";
  
  if(!$run = mysqli_query($con,$Qry))
  {
    var_dump($con->error);
  }
  $row = mysqli_num_rows($run);
  if ($row<1)
  {

    ?>
    <script type="text/javascript">
      alert("Username And Password Are Not Match");
      window.open('index.php','_self');
    </script>
     <?php
 
    
  }
  else
  {
    
   $_SESSION['userid']= $user;
  ?>
    <script type="text/javascript">
      
      window.open('dashboard.php','_self');
    </script>
     <?php
  }

 }
?>
