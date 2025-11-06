<?php

header('Content-Type: application/json; charset=utf-8');

$response = [
    "id"     => 1,
    "name"   => "Maria",
    "email"  => "maria@example.com",
    "status" => "active"
];

echo json_encode($response);
?>