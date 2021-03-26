<?php

$api_url = 'https://api.crystal-d.com/codetest';

// read JSON data
$json_data = file_get_contents($api_url);

// decode data into PHP array
$response_data = json_decode($json_data);

// all data exists in 'people' object
$people_data = $response_data->people;

// Print data to visualize for debugging
// print_r($people_data);

?>