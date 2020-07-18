<?php
include 'includes/Common.php';
if(!isset($_SESSION['email']))
{
  header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>product page</title>
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
<style type="text/css">
  .table
  {
    margin-top: 70px;
  }
</style>
</head>

<body>
	<body>
  <div class="container"> 
 
<?php
include 'includes/header.php';

?>

 
<div class="container">  
 
 
 <div class="panel panel-primary">
   

    <div class="panel-body"> 
    
    <form action="setting_script.php" method="post"> 
  <div class="form-group">
     <label for="exampleFormControlInput1">Change Password </label>
    <input type="password" name="oldpass" class="form-control" id="exampleFormControlInput1" placeholder="old password">
  </div>
   <div class="form-group">
    
    <input type="password" class="form-control" name="newpass" id="exampleFormControlInput1" placeholder="new password">
  </div>
   <div class="form-group">
  
    <input type="password" class="form-control" name="repass" id="exampleFormControlInput1" placeholder=" Re type new password">
  </div>
    
   
 <button type="submit" class="btn btn-primary">change</button>

   
   
</form>

    
 


</div>
</div>
 
<!-- row  2 end -->
<!-- row  3 start -->

</div> 
  
<footer  class="footer ">
<center>Copyright © Lifestyle Store. All Rights
Reserved Contact Us: +91 90000 00000</center>
  
</footer>
</div>
</body>
</html>