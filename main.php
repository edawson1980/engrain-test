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

 
 <!-- <script>
 fetch('https://api.sightmap.com/v1/assets/1273/multifamily/units?per-page=100',{
 	"headers":{
 		'API-Key': '7d64ca3869544c469c3e7a586921ba37',
 	}
 })
 .then(response => {
 	return response.json();
 	console.log(response);
 })
 // using 'pizza' here to make code more readable.  typically, would be 'data',
 // but the second object is named 'data', so 'pizza' makes it easier for me to keep things straight
 .then(pizza => {
 	appendData(pizza)
 	console.log(pizza)
 })
 .catch(err => {
 	console.log(err);
 });
 function appendData(pizza){

 	let big = document.getElementById('bigDiv');
 	let small = document.getElementById('smallDiv');
 	let rawDate;
 	for (var i = 0; i < pizza.data.length; i++) {
 	    var div = document.createElement("div");
 	    div.innerHTML = 'Id: ' + JSON.stringify(pizza.data[i].id) + ',  SqFt: ' + JSON.stringify(pizza.data[i].area);



 			//separate units based on area:
 			if(pizza.data[i].area <= 1){
 				var div = document.createElement("div");
 				div.innerHTML = 'Square Footage: ' +  JSON.stringify(pizza.data[i].area)+'<br> '+ 'Unit Number: '+ JSON.stringify(pizza.data[i].unit_number)+'<br>'+'Last Updated: '+JSON.stringify(pizza.data[i].updated_at);;
 				smallDiv.appendChild(div);
 			}else{
 				var div = document.createElement("div");
 				div.innerHTML = 'Square Footage: ' + JSON.stringify(pizza.data[i].area)+'<br>' + ' Unit Number: '+ JSON.stringify(pizza.data[i].unit_number)+'<br>'+ ' Last Updated: '+ JSON.stringify(pizza.data[i].updated_at);
 				bigDiv.appendChild(div);
 			}
 	  }


 	}

 </script> -->
