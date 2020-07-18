<?php
include 'includes/Common.php';
// if(isset($_SESSION['email']))
// {
//    header("Location:products.php");
// }

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- 
<link  href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
 -->
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
<!-- 
<link  href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
 -->
<link  href="index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <div class="container"> 
 <?php

include 'includes/header.php';
 ?>

<div class="row">
  <div class="col-6">
    
     <div class="card">
            <img class="card-img-top" src="image/signup.jpg" alt="Card image cap">
            <div class="card-body">
              </div>
            </div>


  </div>
  <div class="col-6">
     <div class="panel panel-primary">
                <div class="panel-heading"><h2>Sign Up</h2></div>
                <div class="panel-body"> 
                <p class="text-warning"> 
                   

                </p>
                <form method="post" action="Signup_script.php">
              <div class="form-group">
                <label for="exampleFormControlInput1">name </label>
                <input type="name"  name="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
              </div>
               <div class="form-group">
                <label for="exampleFormControlInput1">Email </label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
              </div>
               <div class="form-group">
                <label for="exampleFormControlInput1">password </label>
                <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
              </div>
               <div class="form-group">
                <label for="exampleFormControlInput1">contact </label>
                <input type="text" name="contact" class="form-control" id="exampleFormControlInput1" placeholder="contact">
              </div>
               <div class="form-group">
                <label for="exampleFormControlInput1">city</label>
                <input type="text" name="city" class="form-control" id="exampleFormControlInput1" placeholder="city">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">address</label>
                <input type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder="city">
              </div>
             <button type="submit" class="btn btn-primary">submit</button>
            </form>
            </div>
            </div>

  </div>


</div> 


            

 <!--
 <div 
 class="header">
        <div class="inner-header">
            <div class="logo"><a href="#">Lifestyle Store</a></div>
            <div class="header-link"><a href="signup.php">Sign Up</a> </div>
            <div class="header-link"><a href="login.php">Log In</a> </div>
        </div>
    </div>
-->
</body>
</html>