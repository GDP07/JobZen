<?php
session_start();
require_once('./conn.php');

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['uid'])) {
        $applicationId = $_POST['id'];
        $selectQuery = "SELECT cv FROM job_applications WHERE id = ?";
        $selectStatement = $conn->prepare($selectQuery);
        $selectStatement->bind_param("i", $applicationId);
        $selectStatement->execute();
        $selectStatement->bind_result($pdfFileName);
        $selectStatement->fetch();
        $selectStatement->close();
        $deleteQuery = "DELETE FROM job_applications WHERE id = ?";
        $deleteStatement = $conn->prepare($deleteQuery);
        $deleteStatement->bind_param("i", $applicationId);
        $deleteStatement->execute();
        if ($deleteStatement->affected_rows > 0) {
            $pdfFilePath = '../cv/' . $pdfFileName;
            if (file_exists($pdfFilePath)) {
                unlink($pdfFilePath);
            }
            echo "Application deleted successfully";
        } else {
            echo "Failed to delete application";
        }
        $deleteStatement->close();
        $conn->close();
    } else {
        http_response_code(403);
        echo "Unauthorized access or invalid request";
    }
} catch (Exception $e) {
    http_response_code(500);
    echo "An error occurred: " . $e->getMessage();
}
