<?php
require 'db.php';
$email = $_POST['email'] ?? '';

$stmt = $db->prepare("SELECT role FROM users WHERE email = ?");
$stmt->execute([$email]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
  $role = $result['role'];
  setcookie('role', $role, time()+3600, '/');
  echo json_encode(['role' => $role]);
} else {
  echo json_encode(['error' => 'User not found']);
}
?>
