<?php

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://api.sightmap.com/v1/assets/1273/multifamily/units?per-page=100",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"API-Key: 7d64ca3869544c469c3e7a586921ba37"
	),
));

$response = curl_exec($curl);



$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	// echo $response;
}

//adding true makes the json become an associative array (meaning we can use brackets)
$information=json_decode($response,true);

 ?>
