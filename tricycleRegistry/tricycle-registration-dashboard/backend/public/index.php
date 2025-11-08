<?php
require_once __DIR__ . '/../src/config/database.php';
require_once __DIR__ . '/../src/routes/api.php';

$database = new Database();
$db = $database->getConnection();

$api = new Api($db);
$api->handleRequest();
?>