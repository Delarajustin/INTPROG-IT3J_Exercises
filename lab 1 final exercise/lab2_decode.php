<?php

$jsonString = '{"name":"Maria","age":21,"email":"maria@example.com"}';

$obj = json_decode($jsonString);

$arr = json_decode($jsonString, true);

echo "Object: " . $obj->name . "<br>";
echo "Array: " . $arr['email'] . "<br>";
?>