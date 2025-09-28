<?php
$data = [
    "nama" => "Andi",
    "umur" => 21,
    "hobi" => ["membaca", "bersepeda", "memasak"]
];

$jsonData = json_encode($data);

echo $jsonData;
?>