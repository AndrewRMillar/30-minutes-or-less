	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
		<head>
			<!-- Mobile Specific Meta -->
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<!-- Favicon-->
			<link rel="shortcut icon" href="img/fav.png">
			<!-- Author Meta -->
			<meta name="author" content="CodePixar">
			<!-- Meta Description -->
			<meta name="description" content="">
			<!-- Meta Keyword -->
			<meta name="keywords" content="">
			<!-- meta character set -->
			<meta charset="UTF-8">
			<!-- Site Title -->
			<title>Real Estate</title>

			<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/ion.rangeSlider.css" />
			<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
			<link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/main.css">
            <link rel="stylesheet" href="css/style.css">
		</head>
		<body>

			<!-- Start Header Area -->
			<?php include 'php/menu.php';?>

			<!-- End Header Area -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
						<div class="banner-content col-lg-12 col-md-12">
							<h1 class="text-uppercase">
								30 minutes or less
							</h1>
							<div class="search-field">
								<form class="search-form" action="post" method="">
									 <div class="row">
									 	<div class="col-lg-12 d-flex align-items-center justify-content-center toggle-wrap">
											<div class="row">
												<div class="col">
													<h4 class="search-title">Search for Accomodation</h4>
												</div>

											</div>
									 	</div>
									    <div class="offset-md-3 col-lg-6">
											<select name="travel time" class="app-select form-control" required>
												<option data-display="travel time">15 min</option>
												<option value="1">20 min</option>
												<option value="2">25 min</option>
												<option value="3">30 min</option>
											</select>
									    </div>
									    <div class="offset-md-3 col-lg-6 range-wrap">
									    	<p>Prijs:</p>
									    	<input type="text" id="range" value="" name="range" />
									    </div>	
									    <div class="col-lg-6 d-flex justify-content-end">
											<!-- dit is bewust niet werkend gemaakt ivm tijd. Hij verwijst nu naar de pagina met een link ipv echt iets door te sturen -->
											<a class="btn btn-primary" href="student_zoek_resultaat.php" role="button">Search</a>
										</div>						  
									  </div>
							  	</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start service Area -->
			<section class="service-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>30 or Less</h1>
							<p>
								30 Or Less is a student housing mediator, 
								aiming to facilitate living space for international students who attend college in the lovely city of Groningen.<br>
								<br>
								We provide a wide choice of student housing located around Groningen city, 
								with a travel time of 30 minutes or less.<br>
								Availability and afforability are our big advantages.<br>
								<br>
								For students who are not yet familiar with the area,<br> 
								we provide a way of finding a place to live that holds up to the standards you are looking for, when arriving in another country.<br>

							</p>
						</div>
					</div>
			</div>
			</section> 
			<!-- End service Area -->



			<!-- start footer Area -->		
						<!-- start footer Area -->		
						<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						
						</div>						
							
					</div>
					<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">

					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/ion.rangeSlider.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/main.js"></script>	
            <script src="js/script.js"></script>
		</body>
	</html>