
<nav class="navbar navbar-expand-lg fixed-top justify-content-between navbar-light bg-light">
  <a class="navbar-brand" href="index.php">E-store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto justify-content-end w-100">
     
        <?php
      if(!isset($_SESSION['email']))
      {
      	?>
         <li class="nav-item active">
        <a class="nav-link" href="signup.php"> <i class="fa fa-user" aria-hidden="true"></i>signup <span class="sr-only">(current)</span></a>
      </li>
     
      	<li class="nav-item">
        <a class="nav-link" href="#myModal"   data-toggle="modal" ><i class=" fa fa-sign-in"></i>Login</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="about.php"><i class="fas fa-address-card"></i>about</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="contactus.php"><i class="fa fa-phone" aria-hidden="true"></i>Contact Us</a>
      </li> 
      <?php
      }
      else{
      	?>
      	 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#"></a></li>
          <li><a class="dropdown-item" href="category.php?cat_id=1">iphone</a></li>
            
             
            <li class="dropdown-submenu dropright">
              
              <a class="dropdown-item dropdown-toggle" href="category.php?cat_id=2"> redmi</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">price >10,000</a></li>
                <li><a class="dropdown-item" href="#">price < 10,000</a></li>
             </ul>
           </li>
            
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle dropdown-toggle-split" href="category.php?cat_id=3">vivo</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">price >10,000</a></li>
                <li><a class="dropdown-item" href="#">price < 10,000</a></li>
             </ul>
           </li>
           <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="category.php?cat_id=4">samsung</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">price >10,000</a></li>
                <li><a class="dropdown-item" href="#">price < 10,000</a></li>
             </ul>
           </li>
           <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="category.php?cat_id=5">oppo</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">price >10,000</a></li>
                <li><a class="dropdown-item" href="#">price < 10,000</a></li>
             </ul>
           </li>
         </ul>
          
          
          <!-- <a class="dropdown-item" href="category.php?cat_id=1">iphone</a>
          
          
          <a class="dropdown-item" href="category.php?cat_id=2">redmi</a>
          <a class="dropdown-item" href="category.php?cat_id=3">vivo</a>
          <a class="dropdown-item" href="category.php?cat_id=4">samsung</a>
          <a class="dropdown-item" href="category.php?cat_id=5">oppo</a>
         -->
      </li>
      	<li class="nav-item">
        <a class="nav-link" href="cart.php"    ><i class=" fa fa-sign-in"></i>cart</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="setting.php"><i class="fas fa-address-card"></i>setting</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fa fa-phone" aria-hidden="true"></i>logout</a>
      </li> 
      	<?php
      }
      ?>
      
    </ul>
     
  </div>
</nav>
<?php
  if(!isset($_SESSION['email']))
  {

?>
    <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Login </h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                	<label for="signup">Dont have an account <a href="signup.php">?Register</a></label>
					<form action="login_submit.php" method="post">

					  <div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
					  </div>
					  <div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
					  </div>
					  <div class="form-group form-check">
					     
					  </div>
					  <button type="submit" class="  btn btn-primary">Login</button>
					</form>
                  	
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                 <label for="forget password"> <a href="signup.php">?forget password?</a></label>
				 </div>
                
              </div>
            </div>
          </div>
          <?php
      }
      ?>