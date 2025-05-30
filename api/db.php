<?php
// Replace the values below with your actual Supabase project details
$host = 'your-project.supabase.co';
$dbname = 'postgres';
$user = 'postgres';
$password = 'your_database_password';

try {
    $db = new PDO("pgsql:host=$host;port=5432;dbname=$dbname", $user, $password);
    $db->setAttribute(PDO
