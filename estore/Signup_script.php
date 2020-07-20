<?php
include 'includes/Common.php';
 include 'includes/dbconfig.php';
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email=$_POST['email'];
$pass=$_POST['password'];

$sql = "SELECT id,name, email FROM users where email= '$email' and password = '$pass' ";
$result = $conn->query($sql);

if ($result->num_rows != 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
    $_SESSION['email']=$row['email'];
    $_SESSION['user_id']=$row['id'];
     echo " email id already exist!!";

  }
} else {
 $name=$_POST['name'];
 $email=$_POST['email'];
 $pass=$_POST['password'];
 $contact=$_POST['contact'];
 $city=$_POST['city'];
 $address=$_POST['address'];
 
 
$sql = "INSERT INTO users (name, email,password,contact,city,address)
VALUES ('$name', '$email', '$pass','$contact','$city','$address')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
 $_SESSION['user_id']= $conn -> insert_id;
 $_SESSION['email']=$email;
 header("Location:home.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

 
}
$conn->close();

 


?>
