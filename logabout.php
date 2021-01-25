<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<link rel="icon" href="img/core-img/favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="img/core-img/favicon.ico">
	<link rel="stylesheet" href="footers.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <style type="text/css">
    html{
      scroll-behavior: smooth;
    }
    @keyframes slideInFromLeft {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(0);
  }
}
.container-fluid{
   animation: 1s ease-out 0s 1 slideInFromLeft;
}
  .breadcumb-area {
  position: relative;
  z-index: 10;
  width: 92%;
  height: 250px;
  margin-left: 4%;
  margin-right: 4%;
  margin-top: 3%; }
  h3{
    color:#4BB543;
    padding: 5px 0;

  }

   #image {
    animation: fadein 3s;
}
  @keyframes fadein {
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }

</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar sticky-top">
   <a class="navbar-brand" href="index.php">
    <img src="img/core-img/logo1.svg" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item" >
        <a class="nav-link" id="home" href="logindex.php" style="color: white;">Home </a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="#" style="color: white;border-bottom: 5px solid green;">About</a>
      </li>
  	    <li class="nav-item">
        <a class="nav-link" href="logcontact.php" style="color: white;">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="home" href="logblog.php" style="color: white;">Blog </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" style="color: white;">Logout</a>
      </li>
       
  
    </ul>
   
  </div>
</nav>

<div class="container-fluid">

		<div id="image" class="breadcumb-area" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(img/bg-img/breadcumb4.jpg); background-size: cover;">
        
            <div class="row h-100 align-items-center">
                <div class="col">
                    <div class="breadcumb-text">
                        <h1 style="text-align: center;color: #fff;">About us</h1>
                    </div>
                </div>
            </div>
      
    </div>

</div>
<div class="container">
		<center><h3 style="margin: 7% 0; font-size: 40px;">Who we are? and What we do?</h3></center>
      <center>
        <h5 style="line-height: 30px;letter-spacing: 1px;margin: 7% 0;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.ud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</h5>
      </center>

    <div class="row" align="center">
<div class="col-sm-3 mb20"><img class="img-fluid m-x-auto d-block img-responsive" src="img/core-img/salad.png" alt="">
<h3><span class="counter">1287</span></h3>
                        <h6>Amazing receipies</h6>

</div>
<div class="col-sm-3 mb20"><img class="img-fluid m-x-auto d-block img-responsive" src="img/core-img/hamburger.png" alt="">
 <h3><span class="counter">25</span></h3>
                        <h6>Burger receipies</h6>
</div>
<div class="col-sm-3 mb20"><img class="img-fluid m-x-auto d-block img-responsive" src="img/core-img/rib.png" alt="">
<h3><span class="counter">471</span></h3>
                        <h6>Meat receipies</h6>
                        </div>
<div class="col-sm-3 mb20" style="padding-top: 9px;"><img class="img-fluid m-x-auto d-block img-responsive" src="img/core-img/pancake.png" alt="">

 <h3><span class="counter">326</span></h3>
                        <h6>Desert receipies</h6>
                        </div>
</div><br><br><br>
</div>

<footer class="footer-distributed">

      <div class="footer-left">

        <img src="img/core-img/logo1.svg">

        <p class="footer-links" style=" font-size: 19px; color: #4BB543;">
          <a href="index.php">Home</a>
          ·
          
          <a href="about.php">About</a>
          ·
          
          
          <a href="contact.php">Contact</a>
        </p>

        <p class="footer-company-name" style="margin-left: -15px;">TheBRIKKSblog &copy; 2000</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><br>10<sup>th</sup> Milestone, Old Chord Road<br> London,UK</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+5-555555</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com" style="color: #4BB543;">thebrikksinfo@gmail.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span style="color: #4BB543;">About Us</span>
          "A happy place for you to find your ideal recipes"
        </p>

        <div class="footer-icons" style=" margin-left: 30px;">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>    

</body>
</html>