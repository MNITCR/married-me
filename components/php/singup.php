<?php
    if (isset($_POST["submit"])) {
        $fullname =  $_POST["fullname"];
        $phone =  $_POST["phone"];
        $password = $_POST["password"];

        $checkQuery = "SELECT phone FROM user_tbl WHERE phone = '$phone'";
        $checkResult = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            // Phone number already exists, show alert
            echo "<script>alert('Phone number already exists.');</script>";
        } else {
            $query = "INSERT INTO user_tbl (name, phone, password, created_at) VALUES ('$fullname', '$phone', '$password', now())";

            if (mysqli_query($conn, $query)) {
                echo "User registration successful!";
                header("Location: /married-me/views/singin.view.php");
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }

    mysqli_close($conn);
