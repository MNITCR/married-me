<?php
session_start();
include './connect.php';

if (isset($_POST['submit_boy'])) {
    $userId = $_SESSION["userid"];
    $khname = $_POST['nameKhmer'];
    $egname = $_POST['nameEnglish'];
    $phone = $_POST['phone'];
    $riel = $_POST['moneyRiel'];
    $dolar = $_POST['moneyDolar'];
    $village = $_POST['location'];
    $comment = $_POST['command'];

    // Check if the girl with the same information already exists
    $checkDuplicateQuery = "SELECT boy_id FROM boy_tbl WHERE khmername = '$khname' AND englishname = '$egname' AND phone = '$phone' AND moneyriel = '$riel' AND moneydolar = '$dolar' AND locaid = (SELECT locaid FROM location_tbl WHERE village = '$village') AND user_id = (SELECT user_id FROM user_tbl WHERE user_id = '$userId')";
    $resultDuplicateCheck = mysqli_query($conn, $checkDuplicateQuery);

    if (mysqli_num_rows($resultDuplicateCheck) > 0) {
        echo "ទិន្នន័យនេះមានរួចហើយ។";
    } else {
        // If not duplicate, proceed with the insertion
        $getLocaidQuery = "SELECT locaid FROM location_tbl WHERE village = '$village'";
        $resultLocaid = mysqli_query($conn, $getLocaidQuery);

        if ($row = mysqli_fetch_assoc($resultLocaid)) {
            // Valid locaid retrieved
            $locaid = $row['locaid'];

            // Insert into girl_tbl
            $query = "INSERT INTO boy_tbl (user_id, khmername, englishname, phone, moneyriel, moneydolar, locaid, commment, created_at)
            VALUES ('$userId', '$khname', '$egname', '$phone', '$riel', '$dolar', '$locaid', '$comment', now())";

            $resultGirl = mysqli_query($conn, $query);

            if (!$resultGirl) {
                echo "Error: " . mysqli_error($conn);
            } else {
                echo "បញ្ជូនទិន្នន័យដោយជោគជ័យ!!";
            }
        } else {
            echo "ឈ្មោះភូមិមិនត្រឹមត្រូវ!!";
        }
    }
}
