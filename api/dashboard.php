<?php
$role = $_COOKIE['role'] ?? 'guest';
if ($role === 'admin') {
  echo json_encode(["message" => "Welcome Admin! You have full access."]);
} elseif ($role === 'resident') {
  echo json_encode(["message" => "Welcome Resident! You have limited access."]);
} else {
  echo json_encode(["message" => "Access denied. Please log in."]);
}
?>
