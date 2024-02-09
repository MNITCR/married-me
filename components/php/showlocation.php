<?php
    include './connect.php';
    include './datalocat.php';

    $locations = array();

    while ($row = mysqli_fetch_assoc($resultLoCA)) {
        $locaid = $row['locaid'];
        $village = $row['village'];
        $locations[] = array('locaid' => $locaid, 'village' => $village);
    }

    // Close the result set
    mysqli_free_result($resultLoCA);

    // Set the content type to JSON
    header('Content-Type: application/json');

    // Output the JSON-encoded data
    echo json_encode($locations);

