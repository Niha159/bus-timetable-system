<?php
header('Content-Type: application/json');

$data = [
    ["bus" => "500D", "route" => "Hebbal - Banashankari", "time" => "9:00 AM"],
    ["bus" => "600", "route" => "Majestic - Vijayanagar", "time" => "10:00 AM"],
];

echo json_encode($data);
?>
