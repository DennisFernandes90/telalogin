<?php
session_start();
include "dao/connect.php";

if(isset($_SESSION["usuario"])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        echo "<h1>Olá ".$_SESSION["usuario"].", seja bem vindo</h1>";
    ?>
    <a href="?logout">Log Out</a>
    
</body>
</html>

<?php
    if(isset($_GET["logout"])){
        session_destroy();
        header("Location: login.php");
    }
}else{
    header("Location: index.php");
}

?>