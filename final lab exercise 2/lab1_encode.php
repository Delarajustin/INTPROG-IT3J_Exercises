<?php

header('Content-Type: application/json; charset=utf-8');

$user = [
    "name"  => "Maria",
    "age"   => 21,
    "course"=> "IT"
];

echo json_encode($user);