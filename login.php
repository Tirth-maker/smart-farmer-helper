<?php
require 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
  if (password_verify($password ,$user['password'])) {
    echo "Welcome, " . htmlspecialchars($user['name']) . "!";
  } else {
    echo "Incorrect password.";
  }
} else {
  echo "No user found.";
}
?>