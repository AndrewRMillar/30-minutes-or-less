<?php
    // aanbod ophalen

    // connectie maken
    require 'db_connect.php';

    // sql query
    $sql = "SELECT * FROM aanbod";
    $result = $conn->query($sql);           

    // als er resultaten zijn dan resultaat in een associetve array zetten

    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
            $currentstatus = $row['status'];
            
        
            $titel = htmlspecialchars($row['titel']);
            
            $reistijd = htmlspecialchars($row['reistijd']);
            
            $frequentie = htmlspecialchars($row['frequentie']);

            $oppervlakte = htmlspecialchars($row['oppervlakte']);
            
            $voorzieningen = htmlspecialchars($row['voorzieningen']);

            $verhuurder = htmlspecialchars($row['verhuurder']);

            $plaatsnaam = htmlspecialchars($row['plaatsnaam']);
            
            echo $titel .  $reistijd .  $frequentie .  $oppervlakte . $voorzieningen . $verhuurder . $plaatsnaam;      
            echo "<br>";
            
            
            }
        }

    else {
        echo "<h2 class=\"display-4\">Geen to-do items gevonden</h2>";
    }

?>