<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "EnerjiMaliyetDb";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) die("Bağlantı Hatası: " . $conn->connect_error); 
?>       