<?php
session_start();
require_once('./conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["jobId"]) && !empty($_POST["jobId"])) {
        $jobId = $_POST["jobId"];
        $stmt = $conn->prepare("DELETE FROM job WHERE id = ?");
        $stmt->bind_param("i", $jobId);
        $stmt->execute();
        $stmt_applications = $conn->prepare("SELECT id, cv FROM job_applications WHERE job_id = ?");
        $stmt_applications->bind_param("i", $jobId);
        $stmt_applications->execute();
        $result = $stmt_applications->get_result();
        while ($row = $result->fetch_assoc()) {
            $pdfFilePath = '../cv/' . $row['cv'];
            if (file_exists($pdfFilePath)) {
                unlink($pdfFilePath);
            }
            $stmt_delete_application = $conn->prepare("DELETE FROM job_applications WHERE id = ?");
            $stmt_delete_application->bind_param("i", $row['id']);
            $stmt_delete_application->execute();
            $stmt_delete_application->close();
        }
        if ($stmt->affected_rows > 0) {
            echo json_encode(array("success" => true));
        } else {
            echo json_encode(array("success" => false, "message" => "Failed to delete job listing."));
        }
        $stmt->close();
        $stmt_applications->close();
        $conn->close();
    } else {
        echo json_encode(array("success" => false, "message" => "Invalid request parameters."));
    }
} else {
    echo json_encode(array("success" => false, "message" => "Invalid request method."));
}
