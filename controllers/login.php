<?php
session_start();
require_once('./conn.php');

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userName = $_POST['userName'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT id, password FROM user WHERE username = ?");
        $stmt->bind_param("s", $userName);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];
            if (password_verify($password, $hashedPassword)) {
                $_SESSION['uid'] = $row['id'];
                $response = array("status" => "success", "message" => "Login successful. Welcome, " . $userName . "!");
            } else {
                $response = array("status" => "error", "message" => "Invalid password. Please try again.");
            }
        } else {
            $response = array("status" => "error", "message" => "Username does not exist.");
        }

        $stmt->close();
    }
} catch (Exception $e) {
    $response = array("status" => "error", "message" => "Error: " . $e->getMessage());
}
$conn->close();
echo json_encode($response);
