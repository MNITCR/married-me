<?php
include '../php/connect.php';

if (isset($_GET['boy_id'])) {
    $boyId = $_GET['boy_id'];

    // Modified query to join boy_tbl and location_tbl on locaid
    $query = "SELECT b.*, l.village AS village_name
              FROM boy_tbl b
              JOIN location_tbl l ON b.locaid = l.locaid
              WHERE b.boy_id = $boyId";

    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $boyData = mysqli_fetch_assoc($result);
        echo json_encode($boyData);
    } else {
        echo json_encode(['error' => 'Boy not found']);
    }
} else {
    echo json_encode(['error' => 'Invalid request']);
}
