<?php
    if (isset($_POST["submit"])){
        $phone = $_POST["phone"];
        $pass = $_POST["password"];

        $query = "SELECT user_id,phone, password FROM user_tbl WHERE phone = '$phone'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row['password'] === $pass) {
                session_start();
                $_SESSION["userid"]= $row["user_id"];
                if(!empty($_POST["remember"])) {
                    setcookie ("user_login",$_POST["phone"],time()+ (10 * 365 * 24 * 60 * 60));
                    setcookie ("userpassword",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
                } else {

                    if(isset($_COOKIE["user_login"])) {
                        setcookie ("user_login","");
                    }
                    if(isset($_COOKIE["userpassword"])) {
                        setcookie ("userpassword","");
                    }
                }
                header("Location: /married-me/views/createboyandgirl.view.php");
            } else {
                echo "<script>alert('Invalid login credentials');</script>";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
?>
