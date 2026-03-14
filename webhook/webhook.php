<?php
 
$api_url = 'https://api.bscscan.com/api?module=stats&action=tokensupply&contractaddress=0x17fd3caa66502c6f1cbd5600d8448f3af8f2aba1&apikey=SHSZNIBDDFNFDPF1B7SSM7I2GWMW97PB3B';
 
// Read JSON file
$json_data = file_get_contents($api_url);
 
// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'data' object
$token_data = $response_data->data;
 
// Print data if need to debug
print_r($token_data);
 
// Traverse $token_data and display user data

	//echo $token->result;

?>