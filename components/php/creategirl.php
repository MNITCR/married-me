<?php
    if (isset($_POST['submit_girl'])){
        $userId = $_SESSION["userid"];
        $khname = $_POST['nameKhmer'];
        $egname = $_POST['nameEnglish'];
        $phone = $_POST['phone'];
        $riel = $_POST['moneyRiel'];
        $dolar = $_POST['moneyDolar'];
        $locaid = $_POST['location'];
        $comment = $_POST['command'];

        $query = "INSERT INTO girl_tbl (user_id, khmername, englishname, phone, moneyriel, moneydolar, locaid, commment, created_at)
        VALUES ('$userId', '$khname', '$egname', '$phone', '$riel', '$dolar', '$locaid', '$comment', now())";

        $resultGirl = mysqli_query($conn, $query);

        if($resultGirl){
            header("location: /married-me/views/createboyandgirl.view.php");
        }

    }
?>
