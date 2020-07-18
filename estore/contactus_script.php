<?php
include 'includes/Common.php';
include 'includes/dbconfig.php';
 
// Create connection
 // $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "estore";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
 $name=$_POST['name'];
 $email=$_POST['email'];
 $msg=$_POST['msg'];
 
 
 
$sql = "INSERT INTO contact(name, email,message) VALUES ('$name', '$email', '$msg');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";


// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("kuki.sharma786@gmail.com","My subject",$msg);
 
 header("Location:index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

 

$conn->close();

 


?>
