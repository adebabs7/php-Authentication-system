<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="logo.png">

    <title>LOGIN</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <style>
      body{padding-top:0;}
    
      </style>
                          <style>
                              #cadetblue {background-color: cadetblue;}
                              #bgim{background-image: url("images/e.jpg");
                                  background-position:center;}
                                  body{background-image: url("docs/ssa.jpg");
                                    background-position:center;}
                              </style>
  </head>

  <body>

    <?php
    include("navb.php");
    ?>




    <div class="container" style="padding-bottom: 60px;">


<?php
//fopen("mydata.txt", "a");
 $_SESSION['status']="off";
if(isset($_POST['login'])){
 $pass= $_POST['pass'];
 $fullname = $_POST['fullname'];

   $linesa = file('mydata.txt');
   $linesa = preg_grep("/$fullname/",$linesa);
   foreach($linesa as $namea){
  

    }
    
    //echo "$namea<br>";
    if(!empty($namea)){

      echo "<script> alert('Login Succesfull') </script>";
      header("Refresh:4; url=account.php"); 
     }else{
       echo "<script> alert('Wrong Login Details') </script>";
     }

  // $linesb = file('mydata.txt');


}
?>



<form class="form-signin my-5" method="POST" action="login.php">

  <h1 class="display-4 mb-3 font-weight-normal text-center text-light my-5">Patient Log in Section</h1>
  <div class="form-group">
  <label for="Fullname" class="sr-only form-control">Your Fullname</label>
  <input type="text" name="fullname" id="inputEmail" class="form-control " placeholder="Your fullname here" required autofocus>
</div>
  
<div class="form-group">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
  </div>
  <div class="form-group  ">
  <input name="login" class="btn btn-lg btn-primary btn" type="submit" Value="Login">
  </div>

</form>
  </div>







    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>



  </body>
</html>
