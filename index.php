<?php
header("Content-type: text/html; charset=utf-8");
header("Accept-Encoding: gzip");
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Expires: Fri, 22 Nov 1963 18:30:00 GMT\n"); // Date in the past
header("Content-Transfer-Encoding: binary");
header("Creation-Date: Wed, 24 May 2017 12:00:00 GMT/n");
?>

<!DOCTYPE html>

<!--   
     I hope you're having a nice day
     Website & code by Tony Reed
-->

<html lang="en">

<head> 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- The above 3 meta tags *must* come first in the head -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Weather</title>

<link href="main.css" rel="stylesheet" />
<link rel="shortcut icon" href="http://www.trljc.com/favicon.ico" type="image/x-icon" /> 
</head>

<body>
<header> 
<h1>The weather in Picton Ontario Canada, <br>powered by <a href="https://darksky.net/poweredby/"> DarkSky </a></h1>
</header>

<article>
<?php

// get the DarkSky forecast
include 'darksky.php';

//Decode it to a nice multi-dimensional array

$foreCast = json_decode(file_get_contents('./dkSky.json'),true);

//Set the timezone 
date_default_timezone_set($foreCast['timezone']);


echo "<div class=now>";

$date=date_create();
date_timestamp_set($date,($foreCast['currently']['time']));
echo(date_format($date,"l d F g:i a T")) . "<br>"; 

echo ($foreCast['currently']['summary']);
$curTemp=round($foreCast['currently']['temperature'],0,PHP_ROUND_HALF_UP);
echo "<br>" . "Currently: " . "$curTemp" . "&deg" . "<br>";
echo "High today: " . round($foreCast['daily']['data'][0]['temperatureMax'],0,PHP_ROUND_HALF_UP);
echo "&deg" . "<br>";
echo "Wind " .  round($foreCast['currently']['windSpeed'],0,PHP_ROUND_HALF_UP) . " mph" ." from ";
// a switch to get wind direction from bearing
include 'wind.php';
echo " gusting to " . round($foreCast['currently']['windGust'],0,PHP_ROUND_HALF_UP) . " mph" . "<br>";
echo "UV Index " . ($foreCast['currently']['uvIndex']) . "<br>";
echo ($foreCast['daily']['summary']);

echo "</div>";

include 'weekly.php'; 
?>

</article>

</body>
</html>

