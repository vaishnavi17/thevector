<?php 
 	include "header.php";
?>
<!DOCTYPE html>
	<head>
	<link rel="stylesheet" href="css/style.css">
	</head>
	<body class="inner-page">
		
		<div id="fh5co-hero">
			<a href="#fh5co-main" class="smoothscroll fh5co-arrow to-animate hero-animate-4"><i class="ti-angle-down"></i></a>
			<!-- End fh5co-arrow -->
			<div class="container">
				<div class="col-md-8 col-md-offset-2">
					<div class="fh5co-hero-wrap">
						<div class="fh5co-hero-intro">
						  <h1 class="to-animate hero-animate-1">Sign Up</h1>
						  <h2 class="to-animate hero-animate-2">-</h2>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<div id="fh5co-main">
			<div class="container">
				<div class="row">

					<div class="fh5co-spacer fh5co-spacer-sm"></div>	
					<div class="col-md-8">
						<form action="signup_script.php" method="POST">
							<div class="col-md-12">
								<div class="form-group">
									<input placeholder="First Name" id="first" type="text" class="form-control input-lg" name = "first">
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input placeholder="Last Name" id="last" type="text" class="form-control input-lg" name = "last">
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input placeholder="Username" id="uid" type="text" class="form-control input-lg" name = "uid">
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input placeholder="Email" id="email" type="text" class="form-control input-lg" name = "email">
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input placeholder="Password" id="pwd" type="password" class="form-control input-lg"
									name = "pwd">
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<!--TODO add dropdown for class-->
									<input placeholder="Class" id="class" type="text" class="form-control input-lg"
									name = "class">
								</div>	
							</div>
							<!--
							<div class="col-md-12">
								<div class="form-group">
									<label for="message" class="sr-only">Message</label>
									<textarea placeholder="Message" id="message" class="form-control input-lg" rows="3"></textarea>
								</div>	
							</div>-->
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" class="btn btn-primary btn-lg " value="Sign Up">
								</div>	
							</div>
							
							
						</form>	
						
					</div>
					<div class="col-md-4">
						<h3>Need Help?</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, harum autem quaerat vitae cupiditate, aspernatur est fugit, commodi optio itaque voluptatum! Beatae quae delectus deserunt est ab in sequi blanditiis!</p>
						<p>
							<a href="#">info@freehtml5.co</a>
						</p>
					</div>

					<div class="fh5co-spacer fh5co-spacer-md"></div>	

				</div>
			</div>

		
		</div>
		<!-- END fhtco-main -->


		<footer role="contentinfo" id="fh5co-footer">
			<a href="#" class="fh5co-arrow fh5co-gotop footer-box"><i class="ti-angle-up"></i></a>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 footer-box">
						<h3 class="fh5co-footer-heading">About us</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima delectus dolorem fugit totam, commodi ad.</p>
						<p><a href="#" class="btn btn-outline btn-sm">I'm a button</a></p>

					</div>
					<div class="col-md-4 col-sm-6 footer-box">
						<h3 class="fh5co-footer-heading">Links</h3>
						<ul class="fh5co-footer-links">
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li><a href="#">Our Careers</a></li>
							<li><a href="#">Support &amp; FAQ's</a></li>
							<li><a href="#">Sign up</a></li>
							<li><a href="#">Log in</a></li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-12 footer-box">
						<h3 class="fh5co-footer-heading">Get in touch</h3>
						<ul class="fh5co-social-icons">
							
							<li><a href="#"><i class="ti-google"></i></a></li>
							<li><a href="#"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="#"><i class="ti-facebook"></i></a></li>	
							<li><a href="#"><i class="ti-instagram"></i></a></li>
							<li><a href="#"><i class="ti-dribbble"></i></a></li>
						</ul>
					</div>
					<div class="col-md-12 footer-box">
						<div class="fh5co-copyright">
						<p>&copy; 2015 Free Slant. All Rights Reserved. <br>Designed by <a href="http://freehtml5.co" target="_blank">FREEHTML5.co</a> Images by: <a href="http://unsplash.com">Unsplash</a> and <a href="http://plmd.me" target="_blank">plmd.me</a></p>
						</div>
					</div>
					
				</div>
				<!-- END row -->
				<div class="fh5co-spacer fh5co-spacer-md"></div>
			</div>
		</footer>
			
			
		<!-- jQuery -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Superfish -->
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="js/easyResponsiveTabs.js"></script>
		<!-- FastClick for Mobile/Tablets -->
		<script src="js/fastclick.js"></script>
		<!-- Parallax -->
		<script src="js/jquery.parallax-scroll.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>

		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>
</html>