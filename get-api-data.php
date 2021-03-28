<?php

$api_url = 'https://api.crystal-d.com/codetest';

// read JSON data
$json_data = json_encode($api_url);

// encode data into JS-friendly array
// $response_data = json_decode($json_data);

// all data exists in 'people' object
// $people_data = $response_data->people;

// $js_array =  json_encode($people_data);

print_r($json_data);

// echo $json_data;


?>