<?php

function  check_if_ordered($item_id)
{
	 
	 include 'includes/dbconfig.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  
$user_id=$_SESSION['user_id'];
$sql = "SELECT * FROM user_items WHERE id='$item_id' AND status='confirmed' AND user_id = '$user_id' ; ";
$result = $conn->query($sql);

if ($result->num_rows >= 1) {
  // output data of each row
  return 1;
} else {
  return 0;
}

$conn->close();
}

?>