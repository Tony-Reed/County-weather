<?php



// Read JSON file from Darksky
$jsonDarkSky = file_get_contents('./dkSky.json');

//Decode it to a nice multi-dimensional array
$foreCast = json_decode($jsonDarkSky,true);
date_default_timezone_set($foreCast['timezone']);

//Print data
//print_r($foreCast);

$date=date_create();
date_timestamp_set($date,($foreCast['currently']['time']));
print_r(date_format($date,"l d F H:i:s"));


?>