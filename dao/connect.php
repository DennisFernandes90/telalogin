<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projeto1";
$message_error = "";
$message_success = "";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    echo "Error: ". $e->getMessage();
}


?>