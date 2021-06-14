
<?php
    
    include 'connection.php';

    $result=mysqli_select_db($conn,$dbname);

    if(!$result)
    {
        echo "Database not selected";
    }
    
     if(isset($_POST['register']))
            {
              
                $userName=$_POST["name"];
               
                $email=$_POST["email"];
                $msg=$_POST["message"];
                

                mysqli_select_db($conn, $dbname);
         
                $sql="INSERT INTO `messages` VALUES ('$userName','$email',  '$msg')";
                echo $sql;
                $sqlResult=mysqli_query($conn,$sql);
         
                 if(!$sqlResult)
                {
                    echo "Data not inserted";
                }
                header('location:contact.php');
            }
         mysqli_close($conn); 
?>




<!DOCTYPE html>

	<head>
	

  	
  	<link rel="shortcut icon" href="favicon.ico">

  	
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="css/themify-icons.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/easy-responsive-tabs.css">
	
	<link rel="stylesheet" href="css/style.css">

	
	

	</head>
	<body class="gototop">
		
		
		<div id="fh5co-main-nav-wrap">
			<div class="fh5co-nav-overlay"></div>
			<div class="fh5co-nav-inner">
				<ul id="fh5co-main-nav">
				
					<li class="active"><a href="index.html">Home</a></li>
					
				</ul>
				<ul class="fh5co-social">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
		
        
		<header id="fh5co-header" role="banner">
			<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle fh5co-nav-white"><i></i></a>
			<div id="fh5co-logo" class="text-center"><a href="index.html"></a></div>
		</header>
		
        
		<aside role="complementary" id="fh5co-hero" style="background-image: url(images/item-30.jpg);">
			<div class="fh5co-bg-overlay"></div>
			<div class="container">
				<div class="fh5co-hero-text-wrap">
					<div class="fh5co-hero-text">
						<h2 class="fh5co-uppercase-heading-sm">CEYLON</h2>
						<h1>You can contact Us</h1>
					</div>
				</div>
			</div>
		</aside>
		
        
		<main role="main">
			
			
			<div class="container" id="fh5co-contact">
				<div class="fh5co-spacer fh5co-spacer-sm"></div>
				
				<div class="col-md-12">
					
					<form action="#" action="" method="post">
						<div class="col-md-6 col-md-offset-3">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" id="name" class="form-control input-lg" placeholder="Name" name="name">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" id="email" class="form-control input-lg" placeholder="Email" name="email">
							</div>
							<div class="form-group">
								<label for="message">Message</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control input-lg" placeholder="Message" ></textarea>
							</div>
							<div class="form-group text-center">
								<input type="submit" value="Send" class="btn btn-primary btn-lg" name="register">
							</div>
						</div>
					</form>
				</div>
				
			</div>

			
		

		</main>
		
        
		<div class="fh5co-call-to-action" style="background-image: url(images/item-49.jpg); background-position: center center;">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="fh5co-call-to-action-wrap">
					
					
				</div>
			</div>
		</div>
		
		<footer role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h2 class="fh5co-footer-title">About</h2>
						<p>Our airline system, <a href="http://freehtml5.co" target="_blank">CEYLON</a> give you safe and nice jurney with lots of facilities.</p>
					</div>
					<div class="col-md-5">
						<h2 class="fh5co-footer-title">Offices</h2>
						<div class="row">
							<div class="col-md-6">
								<h3 class="h4">Sri Lanka</h3>
								<address>No:2456, <br>  Rathmalana Rd</address>
							</div>
							<div class="col-md-6">
								<h3 class="h4">America</h3>
								<address>1806 Veltri Drive <br> Chicago, AK 99503</address>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<h2 class="fh5co-footer-title">Links</h2>
						<ul class="fh5co-footer-links">
							<li><a href="#">CEYLON biscuts</a></li>
							<li><a href="#">CEYLON magazine</a></li>
							<li><a href="#">CEYLON dresses</a></li>
							<li><a href="#">CEYLON Creative Market</a></li>
						</ul>
					</div>
					<div class="col-md-2">
						<h2 class="fh5co-footer-title">Connect</h2>
						<ul class="fh5co-footer-links">
							<li><a href="#" class="fh5co-link"><i class="fa fa-twitter"></i>Twitter</a></li>
							<li><a href="#" class="fh5co-link"><i class="fa fa-facebook-square"></i>Facebook</a></li>
							<li><a href="#" class="fh5co-link"><i class="fa fa-github"></i>Github</a></li>
							<li><a href="#" class="fh5co-link"><i class="fa fa-linkedin-square"></i>LinkedIn</a></li>
							<li><a href="#" class="fh5co-link"><i class="fa fa-google"></i>Google Plus</a></li>
						</ul>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="fh5co-copyright">
							
							<ul class="pull-right fh5co-footer-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</footer>
		
		<a href="#" class="fh5co-gotop"><i class="ti-angle-up"></i></a>
		
			

		<script src="js/jquery-1.10.2.min.js"></script>
		
		<script src="js/jquery.easing.1.3.js"></script>
		
		<script src="js/bootstrap.js"></script>
		
		<script src="js/owl.carousel.min.js"></script>
	
		<script src="js/jquery.magnific-popup.min.js"></script>
		
		<script src="js/easyResponsiveTabs.js"></script>
		
		<script src="js/fastclick.js"></script>
		
		<script src="js/velocity.min.js"></script>
		
		<script src="js/main.js"></script>

	</body>
</html>
