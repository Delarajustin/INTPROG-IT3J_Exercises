<?php

$json_data = file_get_contents("php://input");

if (empty($json_data)) {
    $json_data = '{"username": "admin", "password": "1234"}';
}

$data = json_decode($json_data, true);

if ($data !== null) {
    echo "<h2>Received JSON Data</h2>";
    echo "Username: " . htmlspecialchars($data['username']) . "<br>";
    echo "Password: " . htmlspecialchars($data['password']);
} else {
    echo "Error: Invalid JSON data.";
}
?>