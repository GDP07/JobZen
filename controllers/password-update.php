<?php
session_start();
require_once('./conn.php');

try {
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if ($password !== $confirmPassword) {
        throw new Exception("Passwords do not match");
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $userId = $_SESSION['uid'];

    $sql = "UPDATE user SET password = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("si", $hashedPassword, $userId);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo json_encode(array('success' => true, 'message' => 'Password updated successfully'));
    } else {
        throw new Exception("Failed to update password");
    }

    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    echo json_encode(array('success' => false, 'message' => $e->getMessage()));
}
