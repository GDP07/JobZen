<?php
session_start();
require_once('./conn.php');

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userName = $_POST['userName'];
        $password = $_POST['password'];

        $stmt_check = $conn->prepare("SELECT id FROM user WHERE username = ?");
        $stmt_check->bind_param("s", $userName);
        $stmt_check->execute();
        $stmt_check->store_result();
        if ($stmt_check->num_rows > 0) {
            $response = array("status" => "error", "message" => "Username already exists");
        } else {
            $stmt_insert = $conn->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stmt_insert->bind_param("ss", $userName, $hashedPassword);
            if ($stmt_insert->execute()) {
                $last_id = $conn->insert_id;
                $_SESSION['uid'] = $last_id;
                $response = array("status" => "success", "message" => "Registration successful for user: " . $userName);
            } else {
                $response = array("status" => "error", "message" => "Error: " . $conn->error);
            }
            $stmt_insert->close();
        }
        $stmt_check->close();
    } else {
        $response = array("status" => "error", "message" => "Invalid request method");
    }
} catch (Exception $e) {
    $response = array("status" => "error", "message" => "Error: " . $e->getMessage());
}

$conn->close();

echo json_encode($response);
