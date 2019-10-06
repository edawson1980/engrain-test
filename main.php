<?php
echo "hello, worllld";

$curl = curl_init('https://api.sightmap.com/v1/assets/1273/multifamily/units?per-page=100');
$resp = curl_exec($curl);

//catch errors
if (!curl_exec($curl)) {
    die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
}


 ?>
