<?php
  
  include 'includes/Common.php';
  $oldpass=$_POST['oldpass'];
  $newpass=$_POST['newpass'];
  $repass=$_POST['repass'];

include 'includes/dbconfig.php';
$user_id= $_SESSION['user_id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "$user_id";

$sql = "SELECT id ,password FROM users where  id = $user_id and  password = '$oldpass' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
    // password matches then update query
	
  if($row['password']==$oldpass and $row['id']==$user_id){
$sql = "UPDATE users SET password= '$newpass'  where id=".$row['id']." ";

if ($conn->query($sql) === TRUE) {
  echo "<h2> '$user_id' Record updated successfully</h2>";
} else {
	echo "error";
  
}

    
 }
}
}
  
  

  
 else {
  echo "0 results";
 //  header("Location:setting.php");
}
$conn->close();

 


?>