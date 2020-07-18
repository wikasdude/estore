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
 
 #banner_image .invisibleLink {
    display: block;
    left: 55px; top: 55px;
    position: absolute;
    height: 55px width: 55px;
}
#banner_content
{
	position: relative; padding-top: 6%;
 padding-bottom: 6%;
  margin-top: 12%;
  margin-bottom: 12%;
  background-color: rgba(0, 0, 0, 0.7);
  max-width: 660px;

}
</style>
</head>
<body>
  <div class="container"> 

<?php
 include 'includes/header.php';
?>
<!-- body here -->
    <div class="container" style="margin-bottom: 150px;">
                     <div class="row" style="margin-top: 50px;">
                    
                  <div class="col-9">
                     <h1> Where does it come from?</h1>
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum </p>
                    </div>
                    <div class="col-3">
                      <img  src="image/freind.jpg" alt="Card image">

                    </div>
                  </div>
            <div class="row">
               <div class="col-8">
                <div class="card" style="width:700px">
                <h4 class="card-title">Contact us:</h4>
                  <form action="contactus_script.php" method="post">
                   <div class="form-group">
                  <label for="name">name:</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter name"  >
                </div>
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
                </div>
                <div class="form-group">
                  <label for="msg">message:</label>
                  <input type="textarea" name="msg" class="form-control" placeholder="Enter msg" id="pwd">
                </div>
                 
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
                
              </div>
            </div>
                 
                
               <div class="col-4">
                <h1> Company information?</h1>
    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum </p>
                 

               </div>
            </div>
  </div>




<?php
include 'includes/footer.php';
?>

  </div>
</body>
</html>