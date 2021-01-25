<?php
session_start();
include('config.php');
date_default_timezone_set('Asia/Kolkata');
include('checklogin.php');
check_login();
$aid=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>BRIKKS</title>
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

  <script type="text/javascript" src="http://use.fontawesome.com/e3705e515e"></script>
</head>

<body>
  <style type="text/css">
    @keyframes slideInFromLeftcard {
  0% {
    transform: translateX(100%);
  }
  100% {
    transform: translateX(0);
  }
}

#cap,#zap{
  animation: 1.3s ease-out 0s 1 slideInFromLeftcard;
}


    
    button{
        display: inline-block;
        min-width: 160px;
        height: 50px;
        color: #ffffff;
        border: none;
        border-left: 5px solid #1c8314;
        border-radius: 0;
        padding: 0 30px;
        font-size: 16px;
        line-height: 48px;
        font-weight: 600;
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        text-transform: capitalize;
        background-color: #40ba37; 
        margin-left: 8%;
    }
    button.active,button:hover,button:focus{

          font-size: 16px;
          font-weight: 600;
          color: #ffffff;
          background-color: #1c8314;
          border-color: #40ba37; }
          }

      .main1{

  float: left;

}

.main1 img{

  height: 250px;
  width: 500px;
}

.main2{

  float: right;
  margin-left: 8.5%;

}

.main2 img{

  height: 250px;
  width: 500px;
}

.top-cta-content h3 {
      font-size: 30px;
      color: white;
      font-weight: 600;
      margin-bottom: 5px; }
     

     .top-cta-content h6 {
      color: white;
      margin-bottom: 30px;
      display: block;
      font-weight: 400; }
      

          .top-cta-content {

        position: absolute;
        top: 50%;
        left: 40px;
        width: auto;
        height: auto;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        z-index: 10; }

    .single-top-catagory {
  position: relative;
  z-index: 2;
  margin-bottom: 80px;
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
  overflow: hidden; 
  }
   #zap p{

margin-top: -20%;
margin-bottom: 13%;
color: white;
font-size: 40px;
}

html{
  scroll-behavior: smooth;
}

.cta-area {
  position: relative;
  z-index: 2;
  width: 100%;
  height: 675px;
  background-attachment: fixed;
  background-size: cover; }
  .cta-area .cta-content h2 {
    font-size: 72px;
    margin-bottom: 20px;
    color: #ffffff;
    font-weight: 400;
    padding-top: 15%;
    text-align: center; }
   
  .cta-area .cta-content p {
    color: #ffffff;
    margin-bottom: 100px;
    font-size: 16px; }

    h4{
      padding-top: 20px;color: black;
    }
    h4:hover{
      color: #4BB543;
    }
    .other{
      
      margin-top: -30%;
      padding-left: 10px;
    }
    #date{
      color: #4BB543;
      margin-left: 115px;
    }


     .quote-area {
  position: relative;
  z-index: 1;
  border: 10px solid #40ba37;
  padding: 40px 25px;
  margin-bottom: 80px; }
  .quote-area span {
    font-size: 48px;
    font-style: italic;
    margin-bottom: 30px;
    display: block;
    color: #40ba37;
    line-height: 1; }
  .quote-area h4 {
    font-size: 24px;
    line-height: 1.5;
    font-style: italic;
    margin-bottom: 40px;
    color: #474747; }
    .quote-area p {
    color: #474747;
    font-size: 16px;
    margin-bottom: 50px; }

    .newsletter-area {
  position: relative;
  z-index: 1;
  margin-bottom: 80px; }
  .newsletter-area h4 {
    font-size: 24px;
    margin-bottom: 50px;
    display: block;
    color: #474747; }
    

.newsletter-form {
  padding: 30px 15px 100px; }
  .newsletter-form form input {
    width: 100%;
    height: 60px;
    border: none;
    background-color: #ffffff;
    color: #9b9b9b;
    font-size: 12px;
    font-style: italic;
    border-left: 3px solid #1c8314;
    padding: 0 20px;
    margin-bottom: 25px; }
  .newsletter-form p {
    margin-top: 30px;
    color: #ffffff;
    font-size: 12px;
    margin-bottom: 0;
    font-style: italic; }
#img-hover-zoom {
  height: 300px; /* [1.1] Set it as per your need */
  overflow: hidden; /* [1.2] Hide the overflowing of child elements */
}

/* [2] Transition property for smooth transformation of images */
#img-hover-zoom img {
  transition: transform .3s ease;
}

/* [3] Finally, transforming the image when container gets hovered */
#img-hover-zoom:hover img {
  transform: scale(1.2);
}


#mini {
  height: 100px; /* [1.1] Set it as per your need */
  overflow: hidden; /* [1.2] Hide the overflowing of child elements */
}

/* [2] Transition property for smooth transformation of images */
#mini img {
  transition: transform .3s ease;
}

/* [3] Finally, transforming the image when container gets hovered */
#mini:hover img {
  transform: scale(1.2);
}
  </style>

<nav class="navbar navbar-expand-lg navbar-light navbar sticky-top">
   <a class="navbar-brand" href="#">
    <img src="img/core-img/logo1.svg" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item" style="border-bottom: 5px solid green;">
        <a class="nav-link" id="home" href="#" style="color: white;">Home </a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="logabout.php" style="color: white;">About</a>
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

 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -100px;" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img id="image" class="d-block w-100" src="img/bg-img/bg1.jpg" alt="First slide">
       <div id="cap" class="carousel-caption d-none d-md-block">
    <h2>BRIKKS Special</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur sem eget dui tristique, ac posuere arcu varius.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur sem eget dui tristique, ac posuere arcu varius.</p>
     <form action="#special"><button>Click Here </button></form>
  </div>
  <div id="zap">
    <p><i>“If more of us valued food and cheer and song above hoarded gold, it would be a merrier world.” </i></p>
</div>
    </div>
    <div class="carousel-item">
      <img id="image" class="d-block w-100" src="img/bg-img/b0.jpg" alt="Second slide">
       <div id="cap" class="carousel-caption d-none d-md-block" >
    <h2>The Best Recipes</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur sem eget dui tristique, ac posuere arcu varius.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur sem eget dui tristique, ac posuere arcu varius.</p>
     <form action="#best"><button>Click Here</button></form>
  </div>

  <div id="zap">
    <p><i>“After a good dinner one can forgive anybody, even one's own relations.” </i></p>
</div>
    </div>
    <div class="carousel-item">
      <img id="image" class="d-block w-100" src="img/bg-img/bg7.jpg" alt="Third slide">
       <div id="cap" class="carousel-caption d-none d-md-block">
   <h2>Indian Recipes</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur sem eget dui tristique, ac posuere arcu varius.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur sem eget dui tristique, ac posuere arcu varius.</p>
    <form action="#other" > <button>Click Here </button></form>


  </div>
   <div id="zap" style="padding-bottom: 5%;">
    <p><i>“There is no love sincerer than the love of food.”  </i></p>
</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <div>
  
  <?php 
$aid=$_SESSION['id'];
  $ret="select * from users where id=?";
    $stmt= $mysqli->prepare($ret) ;
   $stmt->bind_param('i',$aid);
   $stmt->execute() ;//ok
   $res=$stmt->get_result();
   //$cnt=1;
     while($row=$res->fetch_object())
    {
      ?>

      <i><h2 class="page-title" style="color: black; margin-left: 4%;">Welcome <?php echo $row->fname;?> , Check out our recipes!</h2></i>

    <?php } ?>
</div>


<hr width="80%"  style="background-color: #4BB543;height: 3px;">
<div class="container" id="special">
<section class="sec">
         <div class="section-heading">
          <br><br><br>
        <h1 align="center" style="margin-top: 2%;">BRIKKS Special</h1>
          <br><br>
    </div>
        <div class="container">
            <div class="row">
                <!-- Top Catagory Area -->
                <div class="main1">
                    <div class="single-top-catagory">
                        <img src="img/bg-img/bg2.jpg" alt="">
                        <!-- Content -->
                        <div class="top-cta-content">
                            <h3>Strawberry Cake</h3>
                            <h6>Simple &amp; Delicious</h6>
                          <a href="scake.php"> <button>See Full Recipe</button></a>
                        </div>
                    </div>
                </div>
                <!-- Top Catagory Area -->
                <div class="main2" >
                    <div class="single-top-catagory">
                        <img src="img/bg-img/bg3.jpg" alt="">
                        <!-- Content -->
                        <div class="top-cta-content">
                            <h3>Chinesse Noodles</h3>
                            <h6>Simple &amp; Delicious</h6>
                             <a href="chinese.php"> <button>See Full Recipe</button></a>
                        </div>
                    </div>
                </div>
            </div>
             <div class="row">
                <!-- Top Catagory Area -->
                <div class="main1">
                    <div class="single-top-catagory">
                        <img src="img/bg-img/b1.jpg" alt="">
                        <!-- Content -->
                        <div class="top-cta-content">
                            <h3>French Toast</h3>
                            <h6>Simple &amp; Delicious</h6>
                             <a href="french.php"><button style="padding-left: 15px;">See Full Recipe</button></a>
                        </div>
                    </div>
                </div>
                <!-- Top Catagory Area -->
                <div class="main2">
                    <div class="single-top-catagory">
                        <img src="img/bg-img/b2.jpg" alt="">
                        <!-- Content -->
                        <div class="top-cta-content">
                            <h3>Pizza</h3>
                            <h6>Simple &amp; Delicious</h6>
                            <a href="pizza.php"> <button style="padding-left: 15px;">See Full Recipe</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<hr width="80%"  style="background-color: #4BB543;height: 3px;">
    <section id="best"><br><br>

     <h1 align="center" style="margin-top: 3%;">The Best Recipes</h1>
          <br><br>    
    <div class="row" style="margin-left: 0%;">
  <div class="col-lg-4 col-md-4 col-xs-4 thumb">
      <div id="img-hover-zoom">
        <a href="sushi.php">
        <img class="img-responsive" src="img/bg-img/r1.jpg" alt="" style="width: 350px; height: 300px;border-bottom: 6px solid #4BB543; cursor: pointer;" > </a></div>
        <a href="sushi.php" style="text-align: center;text-decoration: none;"><h4 >Sushi Zapanise</h4></a>
        <div class="ratings"style="text-align: center; color: gold">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
  </div>
   
      
  
  <div class="col-lg-4 col-md-4 col-xs-4 thumb">
    
        <div id="img-hover-zoom">
          <a href="burger.php">
        <img class="img-responsive" src="img/bg-img/r2.jpg" alt="" style="width: 350px; height: 300px;border-bottom: 6px solid #4BB543; cursor: pointer;"></a></div>
      <a href="burger.php" style="text-align: center;text-decoration: none;"><h4>Mexican Burger</h4></a>
      <div class="ratings"style="text-align: center; color: gold">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>

  </div>
  <div  class="col-lg-4 col-md-4 col-xs-4 thumb">
      <div id="img-hover-zoom">
         <a href="smoothie.php">
        <img class="img-responsive" src="img/bg-img/r3.jpg" alt="" style="width: 350px; height: 300px;border-bottom: 6px solid #4BB543; cursor: pointer;"></a></div>
        <a href="smoothie.php" style="text-align: center;text-decoration: none;"><h4>Vegan Smoothie</h4></a>
       <div class="ratings" style="text-align: center; color: gold">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>

  </div>

    </section>
     <section>
    
    <div class="row" style="margin-left: 0%; margin-top: 3%;">
  <div class="col-lg-4 col-md-4 col-xs-4 thumb">
     <div id="img-hover-zoom">
       <a href="soup.php">
        <img class="img-responsive" src="img/bg-img/r4.jpg" alt="" style="width: 350px; height: 300px;border-bottom: 6px solid #4BB543; cursor: pointer;"></a></div>
        <a href="soup.php" style="text-align: center;text-decoration: none;"><h4 >Calabasa Soup</h4></a>
        <div class="ratings"style="text-align: center; color: gold">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
  </div>
   
      
  
  <div class="col-lg-4 col-md-4 col-xs-4 thumb">
    
       <div id="img-hover-zoom">
        <a href="toast.php">
        <img class="img-responsive" src="img/bg-img/r5.jpg" alt="" style="width: 350px; height: 300px;border-bottom: 6px solid #4BB543; cursor: pointer;"></a></div><br>
      <a href="toast.php" style="text-align: center;text-decoration: none;"><h4 style="margin-top: -6%;">Mangolian Toast</h4></a>
      <div class="ratings"style="text-align: center; color: gold">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>

  </div>
  <div class="col-lg-4 col-md-4 col-xs-4 thumb">
    
       <div id="img-hover-zoom">
         <a href="fruit.php">
        <img class="img-responsive" src="img/bg-img/r6.jpg" alt="" style="width: 350px; height: 300px;border-bottom: 6px solid #4BB543; cursor: pointer;"></a></div>
        <a href="fruit.php" style="text-align: center;text-decoration: none;"><h4>Bali Fruit Salad</h4></a>
       <div class="ratings" style="text-align: center; color: gold">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>

  </div>

    </section>

    
  </div>

<br>



   <section id="abc" class="cta-area" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(img/bg-img/bg4.jpg); margin-top: 3%;" >
        <div>
            
                
                    <!-- Cta Content -->
                    <div class="cta-content" style="text-align: center;">
                        <h2>Mexican Recipes</h2>
                        <p>The traditional food of Mexico has been widely appreciated for its fabulous use of herbs and spices. Indian cuisine is known for its large assortment of dishes. The cooking style varies from region to region and is largely divided into South Mexican & North Mexican cuisine. Mexico is quite famous for its diverse multi cuisine available in a large number of restaurants and hotel resorts, which is reminiscent of unity in diversity</p>
                       <center> <button style="margin-left: 0%;">Coming Soon</button></center>
                    </div>
                
            </div>
        
    </section>

    <div class="container">
      <section id="other"><br><br>
        <h1 align="center" style="margin-top: 2%;">Indian Recipes</h1>
          <br><br>
    
    <div class="row" style="margin-left: 0%; margin-top: 3%;" >
  <div class="col-lg-4 col-md-4 col-xs-4 thumb" id="mini">
    <a href="puliyogre.php">
      <img class="img-responsive" src="img/bg-img/sr15.jpg" alt=""style="width: 85px; height: 80px;border-bottom: 3px solid #4BB543; cursor: pointer;"></a>
        <a href="puliyogre.php" style="text-align: center;text-decoration: none;"><h4 class="other">Pulliyogre</h4></a>
        <div class="ratings"style="text-align: center; color: gold">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                              <span id="date">January 04, 2019</span>
  </div>
   
      
  
  <div class="col-lg-4 col-md-4 col-xs-4 thumb" id="mini">
    <a href="idli.php">
      <img class="img-responsive" src="img/bg-img/sr10.jpg" alt=""style="width: 85px; height: 80px;border-bottom: 3px solid #4BB543; cursor: pointer;"></a><br>
      <a href="idli.php" style="text-align: center;text-decoration: none;"><h4 class="other">Thatte Idli</h4></a>
      <div class="ratings"style="text-align: center; color: gold">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div><span id="date">March 12, 2019</span>

  </div>
  <div class="col-lg-4 col-md-4 col-xs-4 thumb" id="mini">
 <a href="vada.php">
      <img class="img-responsive" src="img/bg-img/sr11.jpg" alt=""style="width: 85px; height: 80px;border-bottom: 3px solid #4BB543; cursor: pointer;"></a>
        <a href="vada.php" style="text-align: center;text-decoration: none;"><h4 class="other">Uddin Vada </h4></a>
       <div class="ratings" style="text-align: center; color: gold">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div><span id="date">April 23, 2019</span>


  </div>

    </section>

    <section>
    
    <div class="row" style="margin-left: 0%; margin-top: 3%;" >
  <div class="col-lg-4 col-md-4 col-xs-4 thumb" id="mini">
    <a href="dosa.php">
      <img class="img-responsive" src="img/bg-img/sr12.jpg" alt=""style="width: 85px; height: 80px;border-bottom: 3px solid #4BB543; cursor: pointer;"></a>
        <a href="dosa.php" style="text-align: center;text-decoration: none;"><h4 class="other">Masala Dosa</h4></a>
        <div class="ratings"style="text-align: center; color: gold">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                              <span id="date">September 11, 2019</span>
  </div>
   
      
  
  <div class="col-lg-4 col-md-4 col-xs-4 thumb" id="mini">
    <a href="poori.php">
      <img class="img-responsive" src="img/bg-img/sr13.jpg" alt=""style="width: 85px; height: 80px;border-bottom: 3px solid #4BB543; cursor: pointer;"></a><br>
      <a href="poori.php" style="text-align: center;text-decoration: none;"><h4 class="other">Poori Bhaji</h4></a>
      <div class="ratings"style="text-align: center; color: gold">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div><span id="date">October 19, 2019</span>

  </div>
  <div class="col-lg-4 col-md-4 col-xs-4 thumb" id="mini">
    <a href="paratha.php">
      <img class="img-responsive" src="img/bg-img/sr16.jpg" alt=""style="width: 85px; height: 80px;border-bottom: 3px solid #4BB543; cursor: pointer;"></a>
        <a href="paratha.php" style="text-align: center;text-decoration: none;"><h4 class="other">Aloo Paratha</h4></a>
       <div class="ratings" style="text-align: center; color: gold">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div><span id="date">December 02, 2018</span>


  </div>

    </section>
    </div>
 
<hr width="80%"  style="background-color: #4BB543;height: 3px; margin-top: 4%;">

 <section class="quote-subscribe-adds" style="margin-top: 10%;">
        <div class="container">
            <div class="row align-items-end">
                <!-- Quote -->
                <div class="col-12 col-lg-4">
                    <div class="quote-area ">
                        <span>"</span>
                        <h4>Nothing is better than going home to family and eating good food and relaxing</h4> <span style="float: right;">"</span>
                        <p>Gordan Ramsay</p>
                        
                    </div>
                </div>

                <!-- Add image -->
               <div class="col-12 col-lg-4">
                    <div class="newsletter-area">
                        <h4 style="text-align: center; margin-bottom: 5%;">Subscribe to our Newsletter</h4>
                        <!-- Form -->
                        <div class="newsletter-form bg-img bg-overlay" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),url(img/bg-img/bg10.jpg);">
                            <form action="insertnews.php" method="post">
                                <input type="email" name="email" placeholder="Subscribe to newsletter" name="email">
                                <button>Subscribe</button>
                            </form>
                            <p>Fusce nec ante vitae lacus aliquet vulputate. Donec sceleri sque accumsan molestie. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
                        </div>
                    </div>
                </div>  

                <!-- Adds -->
                <div class="col-12 col-lg-4">
                    <div class="delicious-add">
                        <img src="img/bg-img/add.png" alt="" style="position: relative; z-index: 1; margin-bottom: 80px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body> 


<footer class="footer-distributed">

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

      </div>

    </footer>    
</html>