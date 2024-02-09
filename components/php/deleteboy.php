<?php
    include '../php/connect.php';
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Get boy_id from the query parameters
        $boyId = $_GET['boy_id'];


        $deleteQuery = "DELETE FROM boy_tbl WHERE boy_id = $boyId";
        $deleteResultBoy = mysqli_query($conn, $deleteQuery);

        if ($deleteResultBoy) {
            echo"<script>alert('Delete successfully!!');location.href='/married-me/views/table.boy.view.php'</script>";
        } else {
            echo "Error deleting boy";
        }
    } else {
        echo "Invalid request method";
    }
