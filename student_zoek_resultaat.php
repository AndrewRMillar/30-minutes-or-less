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
			<title>30 Or Less Student Room Search Result</title>

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

						

								echo "<div class=\"row my-3 bg-light\"><div class=\"column mx-3\"><img class=\"img-thumbnail tumb250px mx-3\" src=\"" . $imgpath . $image . "\" ></div><div class=\"col-6 mx-3\"><ul class=\"list-group clearfix\"><li class=\"list-group-item card-title\">" . $titel . "</li><li class=\"list-group-item card-text\">" . $reistijd . " minuten tot de RUG</li><li class=\"list-group-item card-text\">" . $plaatsnaam . "</li></ul></div><div class=\"column mx-3\"><a href=\"student_kamer_detail.php?id=" . $aanbodID . "\" class=\"btn btn-primary float-right\">Bekijk</a></div></div>";



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