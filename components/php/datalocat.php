<?php
    // Query to fetch village names
    $query = "SELECT locaid, village FROM location_tbl";
    $resultLoCA = mysqli_query($conn, $query);

    if (!$resultLoCA) {
        die("Error: " . mysqli_error($conn));
    }
?>
