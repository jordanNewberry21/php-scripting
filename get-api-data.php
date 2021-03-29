<?php

// API endpoint with the data
$api_url = 'https://api.crystal-d.com/codetest';


// read JSON data
$json_data = file_get_contents($api_url);


// encode data into JS-friendly array
$response_data = json_decode($json_data);

// all data exists in 'people' object
$people_data = $response_data->people;

$json_people = json_encode($people_data);

// print statements for debugging
// print_r($response_data);
// print_r("<br>");
// print_r($people_data);
// print_r("<br>");
// print_r($json_people);

echo $json_people;


?>