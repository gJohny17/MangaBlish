<?php 
    // include header.php file
    include('header.php');    
?>

  <!-- Navigation Bar-->  
  <div class="navbar">
    <a class="active" href="index.html"><i class="fa fa-fw fa-home"></i> MangaBlish</a>
    <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
    <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact Us</a>
    <a class="active" href="login.html"><i class="fa fa-fw fa-user"></i> Login</a>
  </div>
         
<!-- Sign Up Form Page-->
      <div class="sec1">
        <form class="form1">
          <h3 class="formtitle">
            SIGN UP
          </h3>
          <div class="form-group">
            <label for="InputEmail1">E-MAIL ADDRESS</label>
            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

          <div class="form-group">
            <label for="InputPassword1">PASSWORD (A minimum of 8 characters)</label>
            <input type="password" class="form-control" id="InputPassword1" value="" placeholder="Enter Password"
            minlength="8" required>
          </div>

          <div class="form-group">
            <label for="InputPassword2">CONFIRM PASSWORD</label>
            <input type="password" class="form-control" id="InputPassword2" value="" placeholder="Confirm Password">
          </div>

          <button type="submit"class="btn btn-primary" id="signupbtn">Sign Up</button>
        </form>
      </div>

<?php 
    // include header.php file
    include('footer.php');    
?>