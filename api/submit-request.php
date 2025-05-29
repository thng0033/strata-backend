<?php
require 'db.php';
$unit = $_POST['unit'] ?? '';
$desc = $_POST['description'] ?? '';
$stmt = $db->prepare("INSERT INTO maintenance_requests (unit, description) VALUES (?, ?)");
$stmt->execute([$unit, $desc]);
echo json_encode(['status' => 'ok']);
?>