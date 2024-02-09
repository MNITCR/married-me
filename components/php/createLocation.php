<?php
if (isset($_POST['location'])) {
    // Get the location name from the POST data
    $locationName = $_POST['location'];

    // Include your database connection file
    include './connect.php';

    // Check if the location already exists in the database
    $checkQuery = "SELECT COUNT(*) as count FROM location_tbl WHERE village = '$locationName'";
    $checkResult = mysqli_query($conn, $checkQuery);
    $count = mysqli_fetch_assoc($checkResult)['count'];

    if ($count > 0) {
        // Location already exists
        echo json_encode(['success' => false, 'message' => 'ទីតាំងមានរួចហើយ។']);
    } else {
        // Insert the location into the database
        $insertQuery = "INSERT INTO location_tbl (village) VALUES ('$locationName')";
        $insertResult = mysqli_query($conn, $insertQuery);

        if ($insertResult) {
            echo json_encode(['success' => true, 'message' => 'ទីតាំងត្រូវបានបង្កើតដោយជោគជ័យ។']);
        } else {
            echo json_encode(['success' => false, 'message' => 'បរាជ័យក្នុងការបង្កើតទីតាំង។']);
        }
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo json_encode(['success' => false, 'message' => 'សំណើមិនត្រឹមត្រូវ។']);
}
