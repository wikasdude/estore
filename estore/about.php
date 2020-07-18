 
<?php 
require 'includes/Common.php';
  
if (isset($_SESSION['email'])) {
 header('location: products.php');
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
footer{
bottom: 0;
position: fixed;
background-color: black;	
}
 
  
 
</style>
</head>
<body>
  <div class="container"> 

<?php
 include 'includes/header.php';

?>
 <div class="container" style="    margin-bottom: 150px;">
            <div class="row" style="margin-top: 60px;">

              <div class="col-4">
               <div class="card" style="width:300px">
                <div class="card-header">Header</div>
                <img class="card-img-top" src="image/freind.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                   </div>
              </div>
            </div>
              <div class="col-4">
                <div class="card" style="width:300px">
                <div class="card-header">Our history</div>
                 <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text.
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
              </div>

            </div>
              <div class="col-4">
                <div class="card" style="width:400px">
                <div class="card-header">opportunity</div>
                 <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                   </div>
              </div>

            </div>

           

            </div>
</div>
 <?php
include 'includes/footer.php';
?>

  
</body>
</html>