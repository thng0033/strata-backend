<?php
$db = new PDO('pgsql:host=your_host;port=5432;dbname=your_dbname', 'your_user', 'your_password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
