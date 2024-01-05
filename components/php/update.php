<?php
    if (isset($_POST["update"])) {
        $user_id = $_SESSION["userid"];
        $fullname = $_POST["pro-name"];
        $phone = $_POST["pro-phone"];
        $password = $_POST["pro-password"];

        $checkQuery = "SELECT name, phone, password FROM user_tbl WHERE phone = '$phone'";
        $checkResult = mysqli_query($conn, $checkQuery);
        $row = mysqli_fetch_assoc($checkResult);

        if ($row && $phone !== $row["phone"]) {
            echo "<script>alert('Phone number already exists.');</script>";
        }
        elseif ($row && $fullname == $row["name"] && $phone == $row["phone"] && $password == $row["password"]) {
            echo "<script>alert('Please insert new data.');</script>";
        } else {
            $query = "UPDATE user_tbl SET name = '$fullname', phone = '$phone', password = '$password' WHERE user_id = '$user_id'";

            if (mysqli_query($conn, $query)) {
                header("location: /married-me/views/table.girl.view.php");
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }

        mysqli_close($conn);
    }
?>
