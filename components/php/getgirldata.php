<?php
    include '../php/connect.php';

    if (isset($_GET['girl_id'])) {
        $girlId = $_GET['girl_id'];

        $query = "SELECT * FROM girl_tbl WHERE girl_id = $girlId";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $girlData = mysqli_fetch_assoc($result);
            echo json_encode($girlData);
        } else {
            echo json_encode(['error' => 'Girl not found']);
        }
    } else {
        echo json_encode(['error' => 'Invalid request']);
    }
