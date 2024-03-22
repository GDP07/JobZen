<?php
require_once('./conn.php');

if (isset($_POST['id'])) {
    $applicationId = mysqli_real_escape_string($conn, $_POST['id']);
    $query = "UPDATE job_applications SET seen = 1 WHERE id = $applicationId";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo 'Application marked as seen successfully';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
} else {
    echo 'Error: Application ID not provided';
}
