<?php



$jsonDarkSky = file_get_contents('./dkSky.json');

//Decode it to a nice multi-dimensional array
$foreCast = json_decode($jsonDarkSky,true);
date_default_timezone_set($foreCast['timezone']);



//Print data
include darksky.php;
print_r($foreCast);
print_r(get_headers('$dkSky'));



/*
$day=1;
while ($day <= 7):
echo "<br>";
date_timestamp_set($date,($foreCast['daily']['data'][$day]['time']));
echo "<span class=strng>";
print_r(date_format($date,"l d F"));
echo "</span>";
date_timestamp_set($date,($foreCast['daily']['data'][$day]['sunriseTime']));
echo "<br>" . "Sunrise: " . (date_format($date,"h:i"));
date_timestamp_set($date,($foreCast['daily']['data'][$day]['sunsetTime']));
echo "<br>" . "Sunset: " . (date_format($date,"h:i"));
echo "<br>";
$day++;
endwhile;
*/

 ?>