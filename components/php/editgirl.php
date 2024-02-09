<?php
    if (isset($_POST["updateGirl"])){
        $girlID = $_POST['girl_id'];
        $userId = $_SESSION["userid"];
        $khname = $_POST['nameKhmer'];
        $egname = $_POST['nameEnglish'];
        $phone = $_POST['phone'];
        $riel = $_POST['moneyRiel'];
        $dolar = $_POST['moneyDolar'];
        $locaid = $_POST['location'];
        $comment = $_POST['command'];

        $query = "UPDATE girl_tbl SET user_id = '$userId', khmername = '$khname', englishname = '$egname', phone = '$phone', moneyriel = '$riel', moneydolar = '$dolar', locaid = '$locaid', commment = '$comment', updated_at = now() WHERE girl_id = '$girlID'";

        $resultGirl = mysqli_query($conn, $query);

        if($resultGirl){
            // header("location: /married-me/views/createboyandgirl.view.php");
        }
    }
