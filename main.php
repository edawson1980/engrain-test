<?php
echo "hello, worllld";

$curl = curl_init('https://api.sightmap.com/v1/assets/1273/multifamily/units?per-page=100?api_key=7d64ca3869544c469c3e7a586921ba37');
// curl_setopt($ch, CURLOPT_HEADER, true, array(
    // 'API-Key': '7d64ca3869544c469c3e7a586921ba37'
// ));
$resp = curl_exec($curl);
print_r($resp);

//catch errors
if (!curl_exec($curl)) {
    die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
}


 ?>
 <script>
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
 				div.innerHTML = 'Square Footage: ' + JSON.stringify(pizza.data[i].area)+ 'Unit Number: '+ JSON.stringify(pizza.data[i].unit_number)+'Last Updated: '+ JSON.stringify(pizza.data[i].updated_at);;
 				smallDiv.appendChild(div);
 			}else{
 				var div = document.createElement("div");
 				div.innerHTML = 'Square Footage: ' + JSON.stringify(pizza.data[i].area) + ' Unit Number: '+ JSON.stringify(pizza.data[i].unit_number)+ ' Last Updated: '+ JSON.stringify(pizza.data[i].updated_at);
 				bigDiv.appendChild(div);
 			}
 	  }


 	}

 </script>
