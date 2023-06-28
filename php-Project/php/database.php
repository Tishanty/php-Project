<?php

// verbinding met database
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=localhost;dbname=chirpify", $username, $password);
} catch (PDOException $error) {

    echo $error->getMessage();
}


 
