<?php
    $userID = $_SESSION["userid"];

    // Fetch user data from the database
    $query = "SELECT name, phone, password FROM user_tbl WHERE user_id = '$userID'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $userData = mysqli_fetch_assoc($result);

        // Populate form fields with retrieved data
        $fullName = $userData['name'];
        $phone = $userData['phone'];
        $password = $userData['password'];
    } else {
        echo "Error: " . mysqli_error($conn);
    }

?>
