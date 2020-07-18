 
<?php 
require 'includes/Common.php';
  
if (isset($_SESSION['email'])) {
 header('location: home.php');
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

?>
 <div class="container-fluid" style=" margin-bottom: 150px;">
   <!-- The Modal -->
         
          <!-- modal end -->
  <div class="row" style="margin-top: 110px;">

       <!--  <div class="card-deck" style="margin-top: 60px;">
        -->       <!--  firstcol start -->
          <div class="col-md-4 col-sm-6 col-lg-4 col-xl-4">
          <div class="card">
             <div class="card-header">
    #mobile 1
  </div>
            <img class="card-img-top" src="image/mob1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text"> 4.2 snapdragon processor.</p>
               <a class=" btn btn-primary btn-block"  href="#myModal"   data-toggle="modal">buy now</a>
            </div>
            
          </div>
        </div><!-- first col end --> 
      
<!-- 2nd col start -->
<div class="col-md-4 col-sm-6 col-lg-4 col-xl-4">
  <div class="card">
     <div class="card-header">
    #mobile 2
  </div>
    <img class="card-img-top" src="image/mob2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
       <a class=" btn btn-primary btn-block" href="#myModal"   data-toggle="modal">buy now</a>
    </div>
    
  </div>
</div> <!-- col 2 end -->
<!-- row end -->
<div class="col-md-4 col-sm-6 col-lg-4 col-xl-4">
  <div class="card">
     <div class="card-header">
    #mobile 3
  </div>
    <img class="card-img-top" src="image/mob3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <a class=" btn btn-primary btn-block" href="#myModal"   data-toggle="modal">buy now</a>
    </div>
     
  </div>

</div>
<!-- </div> --> <!-- card deck end -->

<!-- 2nd row -->

<!-- <div class="card-deck" style="margin-top: 60px;">
 -->  <div class="col-md-4 col-sm-6 col-lg-4 col-xl-4">
  <div class="card">
    <div class="card-header">
    #1 mobile 4
  </div>
    <img class="card-img-top" src="image/mob4.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">hello. This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer contentThis is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content</p>
       <a class=" btn btn-primary btn-block"  href="#myModal"   data-toggle="modal">buy now</a>
    </div>
    
  </div>
</div> 
<!-- col end -->
<div class="col-md-4 col-sm-6 col-lg-4 col-xl-4">
  <div class="card">
    <div class="card-header">
    # mobile 5
  </div>
    <img class="card-img-top" src="image/mob5.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
       <a class=" btn btn-primary btn-block"  href="#myModal"   data-toggle="modal">buy now</a>
    </div>
    
  </div>
</div>
<!-- col end -->
<div class="col-md-4  col-sm-6 col-lg-4 col-xl-4">
  <div class="card">
    <div class="card-header">
    #mobile 6
  </div>
    <img class="card-img-top" src="image/mob6.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
       <a class="btn btn-primary btn-block"  href="#myModal"   data-toggle="modal">buy now</a>
    </div>
    
  </div>
</div>
<!-- col end -->
<!-- row end -->
 <!-- </div> -->

<!-- second card deck end -->

</div>
   

  </div>
 <?php
include 'includes/footer.php';
?>
</div>
  
</body>
</html>