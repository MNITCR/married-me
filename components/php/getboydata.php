<?php
    include '../php/connect.php';
    if (isset($_GET['boy_id'])) {
        $boyId = $_GET['boy_id'];

        $query = "SELECT * FROM boy_tbl WHERE boy_id = $boyId";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $girlData = mysqli_fetch_assoc($result);
            echo json_encode($girlData);
        } else {
            echo json_encode(['error' => 'Boy not found']);
        }
    } else {
        echo json_encode(['error' => 'Invalid request']);
    }
?>
