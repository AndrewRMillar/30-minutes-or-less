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
			<title>30 Or Less Unit Details</title>

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
						<div class="banner-content col-lg-12 col-md-12">
							<h1 class="text-uppercase">
								30 minutes or less
							</h1>
 						</div>
					</div>
				</div>
			</section>

<?php
    // aanbod ophalen

    // connectie maken
    require 'db_connect.php';

	// sql query
	$aanbodID = htmlspecialchars($_GET["id"]);
	$sql = "SELECT * FROM aanbod WHERE ID = $aanbodID";
	echo $sql;
	echo "<br>";
	echo $aanbodID;
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
			
			$imgpath = "./img/aanbod/" . $aanbodID . "/";

			if ($dir = opendir($imgpath)) {

			while (false !== ($image = readdir($dir))) {

				if ($image != "." && $image != "..") {

					echo "<img class=\"img-thumbnail tumb250px\" src=\"" . $imgpath . $image . "\">";
				}
			}

			closedir($dir);
			}	

	}
	
}


    else {
		echo "<h2 class=\"display-4\">Er is iets fout gegaan.</h2>";
		
    }
?>



		    <section class="service-area section-gap" id="service">
				<div class="container">
					<div class="row no-flex">
							<button class="buttonbck">Back</button>
						<h1><?php echo $reistijd . "min, " . $plaatsnaam;?></h1>
						<p class="infotext"> 
							<ul>
							<li>Traveling time 13min</li>
							<li>Price 400,-</li>
							<li>Square meters 39m2</li>
							<li>Place Hoogezand</li>

						</ul>
					</p>
						<img class="tumb250px foto" src="img/sk1.jpg">
						<img class="tumb250px foto" src="img/sk2.jpg">
						<img class="tumb250px foto" src="img/sk3.jpg">
						<img class="tumb250px foto" src="img/sk4.jpg">
							<button class="buttonreact">React</button>
					</div>
				</div>



			</section>
			<!-- End banner Area -->
		
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