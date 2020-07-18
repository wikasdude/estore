<?php

function  check_if_added_to_cart($item_id)
{
	//include 'includes/Common.php';
	 include 'includes/dbconfig.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
$user_id=$_SESSION['user_id'];
$sql = "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart' ";
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