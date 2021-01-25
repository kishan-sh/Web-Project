<?php
session_start();
include('config.php');
date_default_timezone_set('Asia/Kolkata');
include('checklogin.php');
check_login();
$aid=$_SESSION['id'];
?>


<DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="img/core-img/favicon.ico">
<link rel="stylesheet" href="footers.css">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

<style type="text/css">
  
  body{

    background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(img/blog-img/6.jpg);
    background-size:cover;

  }


  #tab{
    width: 40%;
    border-radius: 30px;
  }



   @keyframes slideInFromLeftcard {
  0% {
    transform: translateY(100%);
  }
  100% {
    transform: translateY(0);
  }
}

#tab,#tabhead{
  animation: 1.3s ease-out 0s 1 slideInFromLeftcard;
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
      
      <li class="nav-item">
        <a class="nav-link" href="adminlogout.php" style="color: white;border-bottom: 5px solid green;">Logout</a>
      </li>
      
    </ul>
   
  </div>
</nav>







<h1 id="tabhead" style="margin-top: 5%; color: black; margin-left: 35%; color: #1c8314;">Newsletter Subscribers</h1>

									
								<table class="display table" id="tab" cellspacing="0" width="40%" style="margin-left: 30%; color: #fff;border:5px solid green;border-radius: 30px; margin-top: 3%; background: rgb(1,2,7,0.5);">
								
									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from newsletter";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>


<center><td style="border:none;"><ul><li><h1 style="margin-left: 16%;margin-top: 10%; font-size: 20px; color: white; position: relative; margin-top: 0px; "><?php echo $row->email;?></h1></li></ul></td></center>


										</tr>
									<?php

									 } ?>
											
										
									</tbody>
								</table>

							
            

</body>


						


<footer class="footer-distributed" style=" position: absolute; bottom:auto;">

      <div class="footer-left">

        <img src="img/core-img/logo1.svg">

        <p class="footer-links" style=" font-size: 19px; color: #4BB543;">
          <a href="#">Home</a>
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

      

    </footer>
  

</html>