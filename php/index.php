<?php 
    // include header.php file
    include('header.php');    
?>

<!-- Carousel/Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
   <li data-target="#slides" data-slide-to="0" class="active"></li>
   <li data-target="#slides" data-slide-to="1"></li>
   <li data-target="#slides" data-slide-to="2"></li>
   <li data-target="#slides" data-slide-to="3"></li>
</ul>
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="../images/logo2.png" alt="">
        <div class="carousel-caption">       
    </div>
    </div>

    <div class="carousel-item">
        <img src="../images/logo2.png" alt="">
    </div>

    <div class="carousel-item">
        <img src="../images/logo2.png" alt="">
    </div>

    <div class="carousel-item">
        <img src="../images/logo2.png" alt="">
    </div>

</div>

</div>

<!-- Jumbotron -->
<div class="container-fluid">
<div class="row jumbotron">
  <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
    <p class="lead" id="para1">MangaBlish is your go to website for all of your favorite manga.
        Create an account today by signing up here!
    </p>
 </div>
 <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
     <!-- Sign Up Button -->
     <a href="signup.html">
    <button type="button" class="btn btn-outline-secondary btn-lg" id="signbtn">
         SIGN UP
     </button></a>

    <!-- Log In Button -->
     <a href="login.html">
         <button type="button" class="btn btn-outline-secondary btn-lg" id="loginbtn">
          LOG IN   
         </button>
     </a>
 </div> 
</div>
</div>

 <!-- LATEST UPDATES -->
 <div class="container-fluid padding">
    <div class="row welcome text-left">
        <div class="col-12">
            <h1 class="display-8">LATEST UPDATES</h1>
        </div>
        <hr>
    </div>
</div>

<!-- First Card -->
<div class="container-fluid padding">
    <div class="row padding">
    <div class="col-md-4">
            <div class="card2">
               <img class="card-img-top" src="../images/logo2.png">
               <div class="card-body">
               <h4 class="card-title">Manga Title</h4>
               <p class="card-text">Chapter xx</p>
               <a href="#" class="btn btn-outline-secondary">Read Chapter</a>
               </div>
            </div>   
           </div>

        <div class="col-md-4">
            <div class="card1">
               <img class="card-img-top" src="../images/logo2.png">
               <div class="card-body">
               <h4 class="card-title">Manga Title</h4>
               <p class="card-text">Chapter xx</p>
               <a href="#" class="btn btn-outline-secondary">Read Chapter</a>
               </div>
            </div>   
           </div>

           <div class="col-md-4">
            <div class="card2">
               <img class="card-img-top" src="../images/logo2.png">
               <div class="card-body">
               <h4 class="card-title">Manga Title</h4>
               <p class="card-text">Chapter xx</p>
               <a href="#" class="btn btn-outline-secondary">Read Chapter</a>
               </div>
            </div>   
           </div>

    </div>
</div>

<!-- Lower  Smaller Cards Start -->
<div class="container-fluid padding">
    <div class="row padding">
        
           <div class="col-md-4">
            <div class="card2">
               <img class="card-img-top" src="../images/logo2.png">
               <div class="card-body">
               <h4 class="card-title">Manga Title</h4>
               <p class="card-text">Chapter xx</p>
               <a href="#" class="btn btn-outline-secondary">Read Chapter</a>
               </div>
            </div>   
           </div>

           <div class="col-md-4">
            <div class="card2">
               <img class="card-img-top" src="../images/logo2.png">
               <div class="card-body">
               <h4 class="card-title">Manga Title</h4>
               <p class="card-text">Chapter xx</p>
               <a href="#" class="btn btn-outline-secondary">Read Chapter</a>
               </div>
            </div>   
           </div>
           <div class="col-md-4">
            <div class="card2">
               <img class="card-img-top" src="../images/logo2.png">
               <div class="card-body">
               <h4 class="card-title">Manga Title</h4>
               <p class="card-text">Chapter xx</p>
               <a href="#" class="btn btn-outline-secondary">Read Chapter</a>
               </div>
            </div>   
           </div>
    </div>
</div>
<!-- Lower  Smaller Cards Start -->

<?php 
    // include header.php file
    include('footer.php');    
?>