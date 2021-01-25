
<?php
session_start();
include('config.php');
if(isset($_POST['login']))
{
$name=$_POST['name'];
$password=$_POST['password'];
$stmt=$mysqli->prepare("SELECT name,password,id FROM admin WHERE name=? and password=? ");
				$stmt->bind_param('ss',$name,$password);
				$stmt->execute();
				$stmt -> bind_result($name,$password,$id);
				$rs=$stmt->fetch();
				$stmt->close();
				$_SESSION['id']=$id;
				$_SESSION['login']=$name;
				
				$ldate=date('d/m/Y h:i:s', time());
				if($rs)
				{
             $uid=$_SESSION['id'];
             $uname=$_SESSION['login'];



$log="insert into adminlog(id,name) values('$uid','$uname')";
$mysqli->query($log);
if($log)
{
header("location:subscribers.php");
				}
}
				else
				{
					echo "<script>alert('Invalid Username/Email or password');</script>";
				}
			}
				?>
<!DOCTYPE html>
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
	
	@import "bourbon";

body {
	background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url(img/bg-img/b3.jpg);	
	background-size: cover;
}

.wrapper {	
	margin-top: 100px;
  margin-bottom: 80px;

}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  
  border-radius: 20px;
  }

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 25px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
		h1{
			text-align: center;
			padding-bottom:15px;
			font-family: arial;
			letter-spacing: 1px;
			font-size: 30px;
		}

		@keyframes slideInFromLeft {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(0);
  }
}

html{
	scroll-behavior: smooth;
}

.container{
   animation: 1.1s ease-out 0s 1 slideInFromLeft;
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
        <a class="nav-link" id="home" href="index.php" style="color: white;">Home </a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="about.php" style="color: white;">About</a>
      </li>
  	    <li class="nav-item">
        <a class="nav-link" href="contact.php" style="color: white;">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: white;border-bottom: 5px solid green;">Login</a>
      </li>
      
    </ul>
   
  </div>
</nav>
<div class="container" style="margin-bottom: 150px;">
	  <div class="wrapper">

    <form class="form-signin" method="POST" action="">       
      <h1>Admin Login</h1>
      <input type="text" class="form-control" name="name" placeholder="Name" required="" autofocus="" /><br>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <br>
       
      <button class="btn btn-lg btn-success btn-block" name="login" type="submit" style="width: 200px; margin-left: 18%;">Login</button>  

    </form>
  </div>
</div>
</body>
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
</html>