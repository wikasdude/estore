 
<?php 
require 'includes/Common.php';
  
if (!isset($_SESSION['email'])) {
 header('location: index.php');
}
else{
  
}
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
 <link  href="index.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
 
 
 
</style>
</head>
<body>
  <div class="container"> 

<?php
 include 'includes/header.php';
 include 'includes/Check-if-added.php';
 
 include 'includes/dbconfig.php';
 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}  

$sql = "SELECT id,name,price, image,description ,category_id FROM items; ";
$result = $conn->query($sql);

if ($result->num_rows != 0) {
  // output data of each row
  ?>
 
 <div class="container-fluid" style=" margin-bottom: 150px;">
   <!-- The Modal -->
     
          <!-- modal end -->
  <div class="row" style="margin-top: 100px;">

       <!--  <div class="card-deck" style="margin-top: 60px;">
        -->       <!--  firstcol start -->
          
            <?php
             while($row = $result->fetch_assoc()) {
      
   

          echo "<div class='col-md-4 col-sm-6 col-lg-4 col-xl-4'>
          <div class='card'><div class='card-header'>
                'name : ".$row['name']." 
            </div>
            <img class='card-img-top' src='{$row['image']}' alt='Card image cap'>
            <div class='card-body'>
              <h5 class='card-title'>".$row['name']."</h5>
              <p class='card-text'> ".$row['description']." <br> price :".$row['price']."</p>";
              
              if (check_if_added_to_cart($row['id'])) {   
 echo "<a href='' class='btn btn-block btn-success' disabled>Added to cart</a>";
 }
  else {
 
 echo "<a href='cart-add.php?id={$row['id']}' name='add' value='add' class='btn btn-block
btn-primary'>Add to cart</a>";
  
 }
 
      echo"</div></div></div>";
 
  }
} else {
  echo "0 results";
}
$conn->close();
 



?>

    
    <!-- first col end --> 

</div>
   

  </div>
 <?php
include 'includes/footer.php';
?>
</div>
  
</body>
</html>