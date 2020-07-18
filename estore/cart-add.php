<?php
include 'includes/Common.php';
 include 'includes/dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 $user_id=$_SESSION['user_id'];
 $item_id=$_GET['id'];

 
 
$sql = "INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location:home.php");
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

 

$conn->close();

 

?>
