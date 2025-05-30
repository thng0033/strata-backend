<?php
require 'db.php';

$email = $_POST['email'] ?? '';
if (!$email) {
  echo json_encode(['error' => 'Missing email']);
  exit;
}

$stmt = $db->prepare("SELECT role FROM users WHERE email = ?");
$stmt->execute([$email]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
  setcookie('role', $result['role'], time()+3600, '/');
  echo json_encode(['role' => $result['role']]);
} else {
  http_response_code(401);
  echo json_encode(['error' => 'Login failed']);
}
?>
