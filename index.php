<!DOCTYPE html>
<html lang="en">
<head>
	<title>Quickvote Website</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
OneTel Template
http://www.templatemo.com/tm-468-onetel
-->
	<!-- stylesheet css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/custom.css">
	<!-- google web font css -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

</head>
<body>
	
<!-- navigation -->

	<div class="container">
		<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand"><img src="images/quik2.png" style="margin-top:-140px;" class="img-responsive" alt="logo"></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="active">HOME</a></li>
				<li><a href="#contestants">CONTESTANTS</a></li>
				<li><a href="#vote">VOTE</a></li>
				<li><a href="#gallery">GALLERY</a></li>
				<li><a href="#contact">CONTACT</a></li>

			</ul>
		</div>
	</div>
</div>		

<!-- home section -->
<div id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-3"></div>
			<div class="col-md-7 col-sm-5">
				<h3>Welcome to</h3>
				<h1 style="color:red;">QuickVote</h1>
				<h3>Vote for your<h3>
				<h1 style="color:red;">FACE OF THE MONTH</h1>
			</div>
		</div>
	</div>
</div>


  <section class="section" id="contestants">
<!-- divider section -->
<div class="divider">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-one">
					<!--<i class="fa fa-laptop"></i>-->
					<img class="img img-circle" src="images/team1a.jpg" height="130px" width="130px" alt="">
					<h2>Aisha Amidat</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-two">
					<!--<i class="fa fa-mobile"></i>-->
					<img class="img img-circle" src="images/team1a.jpg" height="130px" width="130px" alt="">
					<h2>Nifemi Odusanya</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="divider-wrapper divider-three">
					<!--<i class="fa fa-life-ring"></i>-->
					<img class="img img-circle" src="images/team1c.jpg" height="130px" width="130px" alt="">
					<h2>Micheal Nnamdi</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<?php
include('check_input.php');
?>

<!-- about section -->
<div id="vote">
	<div class="container">
		<div class="row">
			<h3><strong>Vote for your face of the month</strong></h3>
			<div class="col-md-6 col-sm-12">
				<div class="myoutput">
				<div class="input-field">
				<h3>Please Fill-out All Fields</h3>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="mail" style="width:20em;" placeholder="Enter your Email" value="<?php echo @$email; ?>" required />
					</div>
					<div class="form-group">
						<label>Select your person</label>	
					<select name="subject" class="form-control" style="width:20em;" placeholder="Select your person" value="<?php echo @$subject; ?>" required pattern="[a-zA-Z .]+" >
						 <option value="">Select your person</option>	
						 <option value="Aisha Amidat">Aisha Amidat</option>	
					    <option value="Nifemi Odusanya">Nifemi Odusanya</option>
					    <option value="Micheal Nnamdi">Micheal Nnamdi</option>
					</select>
					</div>
					<div class="form-group">
						<label>Rate the contestant</label>
						<input type="text" class="form-control" name="msg" style="width:20em;" value="<?php echo @$body; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter your message" />
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0;" />
					</div>
				</form>
			</div>
			</div>
		</div>
		<?php
			if(!isset($filename)){
				$filename = "author";
			}
			?>

			<div class="col-md-6 col-sm-12">
				<div class="qr-field">
				<h3 style="text-align:center">QR Code Result: </h3>
				<center>
					<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
							<?php echo '<img src="temp/'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?>
					</div>
					<a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
				</center>
			</div>
			</div>
		</div>
	</div>
</div>

<!-- portfolio section -->
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Our Gallery</h2>
                <p>Here we have individuals who have won face of the month.</p>
			</div>
         </div>
         
         <div class="row mt30">
            
			<div class="col-md-4 col-sm-4 col-xs-6">
				<a href="images/portfolio-img1.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img1.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6">
				<a href="images/portfolio-img2.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img2.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6">
				<a href="images/portfolio-img3.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img3.jpg" alt="portfolio img"></a>
			</div>
            
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="images/portfolio-img4.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img4.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="images/portfolio-img5.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img5.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="images/portfolio-img6.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img6.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<a href="images/portfolio-img7.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img7.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-12 col-sm-12">
				<a rel="nofollow" href="" class="btn btn-default">View More</a>
			</div>
		</div>
	</div>
</div>		

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
        
			<div class="col-md-5 col-sm-4">
				<img src="images/quik2.png" class="img-responsive" alt="logo">
				<p>QuickVote is a platform to vote for your face of the month
                It is a single page application that can be used for a mini voting process.</p>
				<p><i class="fa fa-phone"></i>08167576127</p>
				<p><i class="fa fa-envelope-o"></i> quickvote@gmail.com</p>
              <!--<p><i class="fa fa-globe"></i> www.company.com</p>-->
			</div>

			<!--<div class="col-md-3 col-sm-4">
				<h3>Useful Links</h3>
				<p><a href="#">HTML5 Templates</a></p>
				<p><a href="#">CSS3 Tricks</a></p>
				<p><a href="#">Design Blog</a></p>
				<p><a href="#">Animations</a></p>
			</div>-->
            
			<div class="col-md-4 col-sm-4 newsletter">
				<h3>Newsletter</h3>
				<p>Do you want to get updates on our face of the month forum,kindly put in your email address</p>
				<div class="input-group">
           	    	<form action="#" method="post">
                        <input name="email" type="email" placeholder="Enter your email" class="form-control" autorequired>
                    	<button type="submit" name="submit" class="btn email">Submit</button>
                  	</form>
				 </div>
			</div>
            
		</div>
	</div>
</footer>

<!-- copyright section -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<p>Copyright © 2019 Tophumy Web Solutions</p>
			</div>
			<div class="col-md-6 col-sm-6">
				<ul class="social-icons">
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-dribbble"></a></li>
					<li><a href="#" class="fa fa-envelope-o"></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>


<!-- javascript js -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>