<?php
require_once('./conn.php');
session_start();

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $jobid = $_POST['jobId'];
        $coverLetter = trim($_POST['coverLetter']);
        $contact = trim($_POST['phoneNumber']);
        $cv = $_FILES['uploadCv']['name'];
        $userId = $_SESSION['uid'];
        $stmt = $conn->prepare("INSERT INTO job_applications (name, user_id, job_id, email, cover_letter, cv, contact) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $name, $userId, $jobid, $email, $coverLetter, $cv, $contact);

        $targetDir = "../cv/";
        $targetFile = $targetDir . basename($_FILES["uploadCv"]["name"]);

        if (move_uploaded_file($_FILES["uploadCv"]["tmp_name"], $targetFile)) {
            if ($stmt->execute()) {
                echo json_encode(array("success" => true, "jobId" => $jobid));
            } else {
                echo json_encode(array("success" => false, "message" => "Failed to submit application"));
            }
        } else {
            echo json_encode(array("success" => false, "message" => "Failed to upload CV"));
        }

        $stmt->close();
        $conn->close();
    } else {
        echo json_encode(array("success" => false, "message" => "Form not submitted"));
    }
} catch (Exception $e) {
    echo json_encode(array("success" => false, "message" => $e->getMessage()));
}
