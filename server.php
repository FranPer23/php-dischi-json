<?php
$string_value = file_get_contents("dischi.json");
// var_dump($string_value);
$disks_array = json_decode($string_value, true);
// var_dump($disks_array);

$response = [
    "results" => $disks_array
];
header('Content-Type: application/json');
echo json_encode($response);
