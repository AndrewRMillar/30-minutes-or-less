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
					<div class="row align-items-center justify-content-center" style="height: 915px;">
						<div class="banner-content col-lg-12 col-md-12">
							<h1 class="text-uppercase only-h1">
								30 minutes or less
							</h1>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start service Area -->

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

						

								echo "<div class=\"row my-3 bg-light\"><div class=\"column mx-3\"><img class=\"img-thumbnail tumb250px mx-3\" src=\"" . $imgpath . $image . "\" ></div><div class=\"col-6 mx-3\"><ul class=\"list-group clearfix\"><li class=\"list-group-item card-title\">" . $titel . "</li><li class=\"list-group-item card-text\">" . $reistijd . " minuten tot de RUG</li><li class=\"list-group-item card-text\">" . $plaatsnaam . "</li></ul></div><div class=\"column mx-3\"><a href=\"student_kamer_detail.php?id=" . $aanbodID . "\" class=\"btn btn-primary float-right\">View</a></div></div>";



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
			<?php include 'php/footer.php';?>
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