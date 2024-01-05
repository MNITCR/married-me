<?php
    while ($row = mysqli_fetch_assoc($resultLoCA)) {
        $locaid = $row['locaid'];
        $village = $row['village'];
        echo "<option value=\"$locaid\">$village</option>";
    }

    // Close the result set
    mysqli_free_result($resultLoCA);
?>
