<?php
$aanbodID = htmlspecialchars($_GET["id"]);

$imgpath = "./img/aanbod/" . $aanbodID . "/";

if ($dir = opendir($imgpath)) {

while (false !== ($image = readdir($dir))) {

    if ($image != "." && $image != "..") {

        echo "<img class=\"img-thumbnail tumb250px\" src=\"" . $imgpath . $image . "\">";
    }
}

closedir($dir);
}


?>
