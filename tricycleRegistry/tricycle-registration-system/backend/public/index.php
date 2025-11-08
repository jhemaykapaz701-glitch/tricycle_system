<?php
require_once '../src/config/database.php';

$database = new Database();
$db = $database->getConnection();

// Here you can include routing logic or a framework to handle requests
// For example, you might use a router to direct requests to the appropriate controller

// Sample routing logic
$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];

// Basic routing example
switch ($requestUri) {
    case '/api/drivers':
        if ($requestMethod === 'GET') {
            // Call method to get drivers
        } elseif ($requestMethod === 'POST') {
            // Call method to create a driver
        }
        break;
    // Add more routes as needed
    default:
        http_response_code(404);
        echo json_encode(["message" => "Not Found"]);
        break;
}
?>