<?php

$json = file_get_contents("php://input");
$data = json_decode($json, true);

if (isset($data['name']) && !empty($data['name'])) {
    $response = [
        "status" => "success",
        "message" => "Welcome, " . htmlspecialchars($data['name']) . "!"
    ];
} else {
    $response = [
        "status" => "error",
        "message" => "Name field is empty."
    ];
}

header("Content-Type: application/json");
echo json_encode($response);
?>