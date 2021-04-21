<?php 
    // include header.php file
    include('header.php');    
?>

  <!-- Navigation Bar -->
  <div class="navbar">
    <a class="active" href="index.html"><i class="fa fa-fw fa-home"></i> MangaBlish</a>
    <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
    <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
    <a class="active" href="../pages/login.html"><i class="fa fa-fw fa-user"></i>Register</a>
  </div>
  <!-- Log In Form Page -->

  <div class="container m-5">
      <div class="row">
          <?php if(isset($_REQUEST['error'])){ ?>
          <div class="col-lg-12">
                <span class="alert alert-danger" style="display:block;"><?php echo $_REQUEST['error'] ?></span>
          </div>
          <?php } ?>
      </div>
      <div class="row">
   		<div class="col-lg-4">
   		</div>
   		<div class="col-lg-4">
	     <form class="form-signin" action="login.php" method="post">
	     	<div class="form-group">
	    	    <h2 class="form-signin-heading text-center">Please Login in</h2>
		    </div>
	        <div class="form-group">
		        <label for="inputEmail" class="sr-only">Email address</label>
		        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
	  		</div>
	        <div class="form-group">
		        <label for="inputPassword" class="sr-only">Password</label>
		        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
		    </div>
		    <div class="form-group">
		        <button class="btn btn-lg btn-success btn-block" type="submit">Log in</button>
		    </div>
	      </form>
		    </div>
	    <div class="col-lg-4">
   		</div>
	  </div>


<?php 
    // include header.php file
    include('footer.php');    
?>