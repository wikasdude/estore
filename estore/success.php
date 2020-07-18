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
  h3
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
   <?php 
  include 'includes/dbconfig.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$item_id=$_GET['id'];
$user_id=$_SESSION['user_id'];

$sql = "UPDATE user_items SET status='confirmed' WHERE item_id = $item_id and user_id = $user_id ;";

if ($conn->query($sql) === TRUE) {
 // echo "<h2>Record updated successfully</h2>";

  echo "<h3> Your order is confirmed. Thank you for shopping
with us. <a href='home.php'>Click here</a> to purchase any other item.
</h3>";
}
 else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();



   ?>
 
 
 
<!-- row  2 end -->
<!-- row  3 start -->

 
  
<footer  class="footer ">
<center>Copyright © Lifestyle Store. All Rights
Reserved Contact Us: +91 90000 00000</center>
  
</footer>
</div>
</body>
</html>
