<?php
include('loginheader.php')
?>

<?php
session_start();
include('config.php');
include('checklogin.php');
check_login();
$aid=$_SESSION['id'];
?>




<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Mexican Burger</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="CSS-only Responsive Layout with Smooth Transitions" />
        <meta name="keywords" content="css3, transitions, animations, css-only, navigation, smooth scrolling, full width, full height, window width, window height" />
        <meta name="author" content="Codrops" />
        
		<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="icon" href="img/core-img/favicon.ico">
		<!--[if lte IE 8]>
			 <link rel="stylesheet" type="text/css" href="css/simple.css" />
		<![endif]-->
    </head>
    <body  >
        <div class="container" >
		
			<!-- Codrops top bar -->
          			
			<div class="st-container" style="margin-top: 0%;">
			
				<input type="radio" name="radio-set" checked="checked" id="st-control-1"/>
				<a href="#st-panel-1">Dish</a>
				<input type="radio" name="radio-set" id="st-control-2"/>
				<a href="#st-panel-2">Time</a>
				<input type="radio" name="radio-set" id="st-control-3"/>
				<a href="#st-panel-3">Ingredients</a>
				<input type="radio" name="radio-set" id="st-control-4"/>
				<a href="#st-panel-4">Method</a>
				<input type="radio" name="radio-set" id="st-control-5"/>
				<a href="#st-panel-5">Feedback</a>
				
				<div class="st-scroll">
				
					<!-- Placeholder text from http://hipsteripsum.me/ -->
					
					<section class="st-panel" id="st-panel-1" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(img/bg-img/bg8.jpg);background-size: cover;">



						<style type="text/css">
	.st-deco{

								background-color:#c79f1c;  transform: translateY(70%);
								position: absolute;
								left: 0%;
								transform: rotate(-45deg);
								top: 30%;
									}

						.st-panel ul li{
								color: white;
							}
							.st-panel ul {
								margin-top: -2%;
							}


							.st-panel p{

								color: white;
							}
							

							#st-panel-2 [data-icon]:after {
	color: white;
}

							#st-panel-2 h2{
								color: #40ba37;;
							}
						</style>
						<div class="st-deco" data-icon="H" ></div>
						<h2 style="color: white;">Strawberry Cake</h2>
						<p>Banksy adipisicing eiusmod banh mi sed. Squid stumptown est odd future nisi, commodo mlkshk pop-up adipisicing retro.</p>
					</section>
					
					<section class="st-panel st-color" id="st-panel-2" style="background-color: black;">
						<div class="st-deco" data-icon="4" style="background-color: green;"></div>
						<h2>Time</h2>
						<div style=""><p style="font-size: 25px;">Preparation: 10 minutes</p><br>
						<p style="margin-top: 60px;font-size: 25px;">Cooking: 30 minutes</p><br>
						<p style="margin-top: 110px;font-size: 25px;">Servings: 8</p></div>
					</section>
					
					<section class="st-panel" id="st-panel-3" style="background-color: black;">
						<div class="st-deco" data-icon="I" style="background-color:  #1c8314;"></div>
						<h2 style="margin-top: -100px; color: #40ba37;">Ingredients</h2>
						<ul style="font-size: 20px; color: solid black; ">
									
								<li>3 cups (400g) of quartered strawberriesr & 3/4 cup (173g) sour cream</li>
								<li>21/4 cup (60ml) milk & 4 large eggs </li>
								<li>1 tsp vanilla extract & 2 1/2 cups (325g) all purpose flour</li>
								<li>1 1/2 cups (310g) sugar &2 tsp baking powder</li>
								<li>2 yogurt containers unbleached white flour </li>
								<li>1.5 yogurt containers milk</li>
								
							
								
							</ul>
					</section>
					
					<section class="st-panel" id="st-panel-4" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(img/bg-img/bg9.jpg);background-size: cover;" >
						<div class="st-deco" data-icon="I" style="background-color:  #1c8314;"></div>
						<h2 style="margin-top: -150px; color: white;">Method</h2>
						<ul style="margin-top: -64px;">
								
								
								<li style="color: white; font-size: 20px; line-height: 43px;text-align: left;">

1. To make the strawberry reduction, add the strawberries to a food processor or blender and puree until smooth. You should have about 1 1/2 cups of puree.</li>
								<li style="color: white;font-size: 20px;line-height: 43px;text-align: left;">

2. When the puree has thickened and reduced, pour into a large measuring cup and allow to cool to at least room temperature. This strawberry mixture can be made ahead, if you like, and stored in the fridge.</li>
								
						</ul>
					
					</section>

				<section class="st-panel" id="st-panel-5" style="background: black;font-family: arial;">
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
				

						<div class="container" style="padding-top: 10%;">
							<div class="row" style="position: absolute;left: 15%;">
								
								<div class="col-sm-6 mb20" style="margin-top: 15%;">
									<style type="text/css">
							
							input{
								padding: 8px 12px;
								margin: 6px 8px;
								border-radius: 7px;
								border:none;
							}
							input:focus{
								outline: none;
							}

							#inp input:hover{
								cursor: not-allowed;
							}

							#feed input:hover{
								cursor: pointer;
							}
						</style>
							<div class="st-deco" data-icon="P" style="background-color:  #1c8314;transform: translateY(70%);
								position: absolute;
								left:-33%;
								transform: rotate(-45deg);
								top: -100%;"></div>
										<form method="POST" action="insertfeed.php" style="border-right: 3px solid green;">


									<h2 style="margin-top: -40%;color: #40ba37;">Feedback</h2>
									<i><h3 style="color: #fff;margin-top: -15%;padding-bottom: 20px;">
										Hello<b> <?php echo $row->fname;?></b>, What do you think about our recipe?, let us know below ; )
									</h3></i> 
									<div class="hidden" style="display: none;">
							<input type="text" name="fname" value="<?php echo $row->fname;?>" readonly="readonly">
						
							<input type="text" name="lname" value="<?php echo $row->lname;?>" readonly="readonly">
							<br>
							<input type="email"  name="email" value="<?php echo $row->email;?>" readonly="readonly">
							
							<input type="phone" name="mobile" value="<?php echo $row->mobile;?>" readonly="readonly">
							<br>
										<input type="text" name="dish" value="strawberrycake" >
									</div>
								<input type="text"  name="feedback" required="" placeholder="Feedback" style="width: 94.5%;">
								<br>
								<div id="feed"><center><input type="submit" name="submit" style="width: 200px;background-color: #40ba37; 
       border-left: 5px solid #1c8314;   border-radius: 7px;font-size: 20px;  color: #fff;font-weight: 70pt;letter-spacing: 1px;"></center></div>
							</form>
								</div>
									<?php } ?>
								<div class="col-sm-6 mb20" style="margin-top: 15%;margin-left: -8%;">
									<h2 style="margin-top: -40%;">Reviews</h2>
								<table class="display table" cellspacing="0" width="40%" style="color: #fff;border:none;">
								
									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from feedback where dish='strawberrycake'";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>


<td style="border: none;"><h4 style="margin-left: 20%;margin-top: -20%;padding: 7	% 0%;"><?php echo $row->fname;?> said "<i><span style="color: silver;"><?php echo $row->feedback;?>"</span></i></h4></td>


										</tr>
									<?php

									 } ?>
											
										
									</tbody>
								</table>

							</div>


						</div>
					</section>

				</div><!-- // st-scroll -->
				
			</div><!-- // st-container -->
			
        </div>
	</body>
</html>