<?php
require 'db.php';
$email = $_POST['email'] ?? '';
$role = ($email === 'admin@example.com') ? 'admin' : 'resident';
setcookie('role', $role, time()+3600, '/');
echo json_encode(['role' => $role]);
?>