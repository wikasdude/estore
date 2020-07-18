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

$sql = "SELECT id, email FROM users where email= '$email' and password = '$pass' ";
$result = $conn->query($sql);

if ($result->num_rows != 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
    if($row['email']==$email){
   $_SESSION['email']=$email;
   $_SESSION['user_id']=$row['id'];
    header("Location:home.php");
 }
  }
} else {
  echo "0 results";
}
$conn->close();

mysqli_close($conn);

?>