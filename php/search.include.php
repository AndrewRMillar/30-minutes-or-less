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
            
            echo $aanbodID . $titel .  $reistijd .  $frequentie .  $oppervlakte . $voorzieningen . $verhuurder . $plaatsnaam;      
            echo "<br>";

            $imgpath = "./img/aanbod/tumb" . $aanbodID . "/";

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
        echo "<h2 class=\"display-4\">Geen to-do items gevonden</h2>";
    }
?>