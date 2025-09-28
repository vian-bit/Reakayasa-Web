<?php
$jsonData = '{"nama": "Budi", "umur": 25, "pekerjaan": "Programmer"}';

$arr = json_decode($jsonData, true);
echo $arr["nama"];
echo $arr["umur"]; 
echo $arr["pekerjaan"];

$obj = json_decode($jsonData);
echo $obj->nama;
echo $obj->umur;
echo $obj->pekerjaan;
?>