<?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Get girl_id from the query parameters
        $girlId = $_GET['girl_id'];


        $deleteQuery = "DELETE FROM girl_tbl WHERE girl_id = $girlId";
        $deleteResultGirl = mysqli_query($conn, $deleteQuery);

        if ($deleteResultGirl) {
            echo"<script>alert('Delete successfully!!');location.href='/married-me/views/table.girl.view.php'</script>";
        } else {
            echo "Error deleting girl";
        }
    } else {
        echo "Invalid request method";
    }
?>
