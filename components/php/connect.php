<?php
    $host = "localhost";
    $user = "root";
    $port = "3307";
    $pass = "";
    $db = "married_me";

    $conn = mysqli_connect($host,$user,$pass, $db , $port);

    if ($conn === false){
        print("Could not connect to database");
    }
?>
