<?php

$day=1;
while ($day <= 7):
echo "<br>";
date_timestamp_set($date,($foreCast['daily']['data'][$day]['time']));
echo "<span class=strng>";
print_r(date_format($date,"l d F"));
echo "</span>" . "<br>";

echo ($foreCast['daily']['data'][$day]['summary']);
echo "<br>" . "High today: ";
echo round($foreCast['daily']['data'][$day]['temperatureMax'],0,PHP_ROUND_HALF_UP);

echo "&deg". "<br>" . "Overnight :";
echo round($foreCast['daily']['data'][$day]['temperatureMin'],0,PHP_ROUND_HALF_UP);
echo "&deg";

date_timestamp_set($date,($foreCast['daily']['data'][$day]['sunriseTime']));
echo "<br>" . "Sunrise: " . (date_format($date,"h:i"));
date_timestamp_set($date,($foreCast['daily']['data'][$day]['sunsetTime']));
echo "<br>" . "Sunset: " . (date_format($date,"h:i"));
echo "<br>";
$day++;
endwhile;
 

 ?>