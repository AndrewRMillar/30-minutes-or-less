	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
		<head>
			<!-- Mobile Specific Meta -->
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<!-- Favicon-->
			<link rel="shortcut icon" href="img/fav.png">
			<!-- Author Meta -->
			<meta name="Edwin Dijkstra" content="">
			<!-- Meta Description -->
			<meta name="description" content="">
			<!-- Meta Keyword -->
			<meta name="keywords" content="">
			<!-- meta character set -->
			<meta charset="UTF-8">
			<!-- Site Title -->
			<title>Student Room Search Result</title>

			<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<link rel="stylesheet" href="css/linearicons.css">=
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
						<!-- <div class="banner-content col-lg-12 col-md-12">
							<h1 class="text-uppercase">
								30 minutes or less
							</h1>
							<div class="search-field">
								<form class="search-form" action="#">
									 <div class="row">
									 	<div class="col-lg-12 d-flex align-items-center justify-content-center toggle-wrap">
											<div class="row">
												<div class="col">
													<h4 class="search-title">Search Properties For</h4>
												</div>
												<div class="col">
													<div class="onoffswitch3 d-block mx-auto">
													    <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
													    <label class="onoffswitch3-label" for="myonoffswitch3">
													        <span class="onoffswitch3-inner">
													            <span class="onoffswitch3-active">
													            	<span class="onoffswitch3-switch">Sell</span>
													            	<span class="lnr lnr-arrow-right"></span>
													            </span>
													            <span class="onoffswitch3-inactive">
													            	<span class="lnr lnr-arrow-left"></span>
													            	<span class="onoffswitch3-switch">Rent</span>
													            </span>
													        </span>
													    </label>
													</div>													
												</div>
											</div>
									 	</div>
									    <div class="col-lg-3 col-md-6 col-xs-6">
											<select name="lorem ipsum" class="app-select form-control" required>
												<option data-display="lorem ipsum">lorem ipsum</option>
												<option value="1">lorem ipsum</option>
												<option value="2">lorem ipsum</option>
												<option value="3">lorem ipsum</option>
											</select>
									    </div>
									    <div class="col-lg-3 col-md-6 col-xs-6">
											<select name="lorem ipsum" class="app-select form-control" required>
												<option data-display="lorem ipsum">lorem ipsum</option>
												<option value="1">Property type 1</option>
												<option value="2">Property type 2</option>
												<option value="3">Property type 3</option>
											</select>
									    </div>
									    <div class="col-lg-3 col-md-6 col-xs-6">
											<select name="lorem ipsum" class="app-select form-control" required>
												<option data-display="lorem ipsum">lorem ipsum</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											</select>
									    </div>
									    <div class="col-lg-3 col-md-6 col-xs-6">
											<select name="lorem ipsum" class="app-select form-control" required>
												<option data-display="lorem ipsum">lorem ipsum</option>
												<option value="1">One</option>
												<option value="2">Two</option>
												<option value="3">Three</option>
											</select>
									    </div>
									    <div class="col-lg-4 range-wrap">
									    	<p>Prijs:</p>
									    	<input type="text" id="range" value="" name="range" />
									    </div>	
									    <div class="col-lg-4 range-wrap">
									    	<p>Maat:</p>
									    	<input type="text" id="range2" value="" name="range" />
									    </div>										    
									    <div class="col-lg-4 d-flex justify-content-end">
											<button class="primary-btn mt-50" style="height: 45px;">Zoek<span class="lnr lnr-arrow-right"></span></button>
										</div>						  
									  </div>
							  	</form>
							</div>
						</div> -->
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start service Area -->

			<!-- <div>
				<h1>Header 1</h1>
				<p>Hallo dit is content</p>		
			
			</div> -->



			<?php
    // aanbod ophalen

    // connectie maken
    require 'db_connect.php';

    // sql query
    $sql = "SELECT * FROM aanbod";
    $result = $conn->query($sql);           

    // als er resultaten zijn dan resultaat in een associtievee array zetten

    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) 
        {
            $currentstatus = $row['status'];

            // rows naar variabelen vertalen
            
            $aanbodID = htmlspecialchars($row['ID']);
                    
            $titel = htmlspecialchars($row['titel']);
            
            $reistijd = htmlspecialchars($row['reistijd']);
            
            $frequentie = htmlspecialchars($row['frequentie']);

            $oppervlakte = htmlspecialchars($row['oppervlakte']);
            
            $voorzieningen = htmlspecialchars($row['voorzieningen']);

            $verhuurder = htmlspecialchars($row['verhuurder']);

            $plaatsnaam = htmlspecialchars($row['plaatsnaam']);
            

			$imgpath = "./img/aanbod/tumb/" . $aanbodID . "/";


                    if ($dir = opendir($imgpath)) {

                        while (false !== ($image = readdir($dir))) {

                            if ($image != "." && $image != "..") {

						

								echo "<div class=\"row my-3 bg-light\"><div class=\"column mx-3\"><img class=\"img-thumbnail tumb250px mx-3\" src=\"" . $imgpath . $image . "\" ></div><div class=\"col-6 mx-3\"><ul class=\"list-group clearfix\"><li class=\"list-group-item card-title\">" . $titel . "</li><li class=\"list-group-item card-text\">" . $reistijd . " minuten tot de RUG</li><li class=\"list-group-item card-text\">" . $plaatsnaam . "</li></ul></div><div class=\"column mx-3\"><a href=\"?id=1\" class=\"btn btn-primary float-right\">Bekijk</a></div></div>";



                            }
                         }
            
                closedir($dir);
                    }
        }
            
    }


    else {
		echo "<h2 class=\"display-4\">Geen to-do items gevonden</h2>";
		
    }
?>
            


            <!-- <div class="card">
                    <div class="card-header">
                      Quote
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                      </blockquote>
                    </div>
            </div> -->


			<!-- <section class="service-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>Why we are the best</h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-license"></span>Professional Service</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6 pb-30">
							<div class="single-service">
								<h4><span class="lnr lnr-phone"></span>Great Support</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-service">
								<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>									
							</div>
						</div>						
					</div>
				</div>	
			</section> -->
			<!-- End service Area -->

			<!-- Start property Area -->
			<!-- <section class="property-area section-gap relative" id="property">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>Our Top Rated Properties</h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="single-property">
								<div class="images">
									<img class="img-fluid mx-auto d-block" src="img/s1.jpg" alt="">
									<span>For Sale</span>
								</div>
								
								<div class="desc">
									<div class="top d-flex justify-content-between">
										<h4><a href="#">04 Bed Duplex</a></h4>
										<h4>$3.5M</h4>
									</div>
									<div class="middle">
										<div class="d-flex justify-content-start">
										<p>Bed: 04</p>
										<p>Bath: 03</p>
										<p>Area: 750sqm</p>
										</div>
										<div class="d-flex justify-content-start">
										<p>Pool: <span class="gr">Yes</span></p>
										<p>Internet: <span class="rd">No</span></p>
										<p>Cleaning: <span class="rd">No</span></p>
										</div>
									</div>
									<div class="bottom d-flex justify-content-start">
										<p><span class="lnr lnr-heart"></span> 15 Likes</p>
										<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
									</div>	
								</div>	
							</div>
						</div>	
						<div class="col-lg-4">
							<div class="single-property">
								<div class="images">
									<img class="img-fluid mx-auto d-block" src="img/s2	.jpg" alt="">
									<span>For Sale</span>
								</div>
								
								<div class="desc">
									<div class="top d-flex justify-content-between">
										<h4><a href="#">04 Bed Duplex</a></h4>
										<h4>$3.5M</h4>
									</div>
									<div class="middle">
										<div class="d-flex justify-content-start">
										<p>Bed: 04</p>
										<p>Bath: 03</p>
										<p>Area: 750sqm</p>
										</div>
										<div class="d-flex justify-content-start">
										<p>Pool: <span class="gr">Yes</span></p>
										<p>Internet: <span class="rd">No</span></p>
										<p>Cleaning: <span class="rd">No</span></p>
										</div>
									</div>
									<div class="bottom d-flex justify-content-start">
										<p><span class="lnr lnr-heart"></span> 15 Likes</p>
										<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
									</div>	
								</div>	
							</div>
						</div>	
						<div class="col-lg-4">
							<div class="single-property">
								<div class="images">
									<img class="img-fluid mx-auto d-block" src="img/s3.jpg" alt="">
									<span>For Sale</span>
								</div>
								
								<div class="desc">
									<div class="top d-flex justify-content-between">
										<h4><a href="#">04 Bed Duplex</a></h4>
										<h4>$3.5M</h4>
									</div>
									<div class="middle">
										<div class="d-flex justify-content-start">
										<p>Bed: 04</p>
										<p>Bath: 03</p>
										<p>Area: 750sqm</p>
										</div>
										<div class="d-flex justify-content-start">
										<p>Pool: <span class="gr">Yes</span></p>
										<p>Internet: <span class="rd">No</span></p>
										<p>Cleaning: <span class="rd">No</span></p>
										</div>
									</div>
									<div class="bottom d-flex justify-content-start">
										<p><span class="lnr lnr-heart"></span> 15 Likes</p>
										<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
									</div>	
								</div>	
							</div>
						</div>																											
					</div>
				</div>	
			</section> -->
			<!-- End property Area -->	
				
			<!-- Start city Area -->
			<!-- <section class="city-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 mb-10">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/p1.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">San Fransisco Properties</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-8 col-md-8 mb-10">
							<div class="content">
							    <a href="#" target="_blank">
							      <div class="content-overlay"></div>
							  		 <img class="content-image img-fluid d-block mx-auto" src="img/p2.jpg" alt="">
							      <div class="content-details fadeIn-bottom">
							        <h3 class="content-title">New York Properties</h3>
							      </div>
							    </a>
						  	</div>
							<div class="row city-bottom">
								<div class="col-lg-6 col-md-6 mt-30">
									<div class="content">
									    <a href="#" target="_blank">
									      <div class="content-overlay"></div>
									  		 <img class="content-image img-fluid d-block mx-auto" src="img/p3.jpg" alt="">
									      <div class="content-details fadeIn-bottom">
									        <h3 class="content-title">Boston Properties</h3>
									      </div>
									    </a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 mt-30">
									<div class="content">
									    <a href="#" target="_blank">
									      <div class="content-overlay"></div>
									  		 <img class="content-image img-fluid d-block mx-auto" src="img/p4.jpg" alt="">
									      <div class="content-details fadeIn-bottom">
									        <h3 class="content-title">Elay Properties</h3>
									      </div>
									    </a>
									</div>
								</div>								
							</div>
						</div>
					</div>
				</div>	
			</section> -->
			<!-- End city Area -->

			<!-- Start About Area -->
			<!-- <section class="about-area">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 about-left">
							<div class="single-about pb-30">
								<h4>Why Choose Us</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
							</div>
							<div class="single-about pb-30">
								<h4>Our Properties</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
							</div>
							<div class="single-about">
								<h4>legal notice</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
							</div>																
						</div>			
						<div class="col-lg-6 about-right no-padding">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>			
					</div>
				</div>	
			</section>
			<!-- End About Area -->		 -->
		
			<!-- Start contact-info Area -->
			<!-- <section class="contact-info-area section-gap">
				<div class="container">
					<div class="row">
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Visit Our Office</h4>
							 <p>
							 	56/8, bir uttam qazi nuruzzaman 
							 	road, west panthapath, kalabagan, 
							 	Dhanmondi, Dhaka - 1205
							 </p>                                   
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Let’s call us</h4>
							 <p>
								Phone 01: 012-6532-568-9746 <br>
								Phone 02: 012-6532-568-9748 <br>
								FAX: 02-6532-568-746
							 </p>                                   
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Let’s Email Us</h4>
							 <p>
								hello@colorlib.com <br>
								mainhelpinfo@colorlib.com <br>
								infohelp@colorlib.com
							 </p>                                   
						</div>
						<div class="single-info col-lg-3 col-md-6">
							 <h4>Customer Support</h4>
							 <p>
							 	support@colorlib.com <br>
								emergencysupp@colorlib.com <br>
								extremesupp@colorlib.com
							 </p>                                   
						</div>																		
					</div>
				</div>	
			</section> -->
			<!-- End contact-info Area -->

			<!-- Start Contact Area -->
			<!-- <section class="contact-area" id="contact">
				<div class="container-fluid">
					<div class="row align-items-center d-flex justify-content-start">
						<div class="col-lg-6 col-md-12 contact-left no-padding">
	      					<div style=" width:100%;
	                height: 545px;" id="map"></div>
						</div>
						<div class="col-lg-4 col-md-12 pt-100 pb-100">
							<form class="form-area" id="myForm" action="mail.php" method="post" class="contact-form text-right">
								<input name="fname" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mt-10" required="" type="text">
								<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-10" required="" type="email">
								<textarea class="common-textarea mt-10" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
								<button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
								<div class="alert-msg">
								</div>
							</form>
						</div>
					</div>
				</div>
			</section> -->
			<!-- End Contact Area -->	

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
		</body>
	</html>