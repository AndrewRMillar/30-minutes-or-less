<?php
    // connectie maken met database op host van Erwin
    $servername = "localhost";
    $username = "deb25567_30orless";
    $password = "Jq8xWRVLi";
    $dbname = "deb25567_30orless";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>