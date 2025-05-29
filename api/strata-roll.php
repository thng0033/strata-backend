<?php
require 'db.php';
$stmt = $db->query("SELECT unit, owner FROM strata_roll");
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
?>