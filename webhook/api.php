<?php
// Initiate curl session in a variable (resource)
$curl_handle = curl_init();

$url = "https://api.bscscan.com/api?module=stats&action=tokensupply&contractaddress=0x17fd3caa66502c6f1cbd5600d8448f3af8f2aba1&apikey=SHSZNIBDDFNFDPF1B7SSM7I2GWMW97PB3B";

// Set the curl URL option
curl_setopt($curl_handle, CURLOPT_URL, $url);

// This option will return data as a string instead of direct output
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

// Execute curl & store data in a variable
$curl_data = curl_exec($curl_handle);

curl_close($curl_handle);

// Decode JSON into PHP array
$response_data = json_decode($curl_data);
$value = get_object_vars($response_data);

// Print all data if needed
//print_r($value);
//die();
//echo "<pre>";
//print_r($value);
//echo "</pre>";


echo $value["result"];

?>