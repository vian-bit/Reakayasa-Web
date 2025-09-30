<?php
function curl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
//alamat localhost
$send = curl("http://localhost/rekayasaweb/pertemuan2/getWisata.php");

//mengubah json menjadi array
$data = json_decode($send, true);

echo "<table border='1' cellpadding='4' cellspacing='0'>";
echo "<tr>
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
      </tr>";

foreach ($data as $row) {
    echo "<tr>";
    echo "<td>".$row["kota"]."</td>";
    echo "<td>".$row["landmark"]."</td>";
    echo "<td>".$row["tarif"]."</td>";
    echo "</tr>";
}

echo "</table>";
?>