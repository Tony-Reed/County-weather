<?php
  /*
mb_http_output('UTF-8'); 
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_language('uni');
mb_regex_encoding('UTF-8');
  */
// lat & long lead to 23 Ferguson St., Picton, Ontario, Canada
$lat=44.0044;
$lon=-77.1453;

// Dark Sky API key (somewhere safe)
$key=getenv('DARK_SKY_KEY');

// Dark Sky magic
$url="https://api.darksky.net/forecast/";

// We don't need the weatherstation flags
$exc="?exclude=flags";

// this gets the windspeed in MPH ('cause I like that!)
$opt="&units=uk2";

// put together a custom url
$dkSky=$url . $key . "/" . $lat . "," . $lon . $exc .  $opt;  

/*
// debugging
//echo  $dkSky;
//return true;
*/

// download the forecast
$dkSky=file_get_contents($dkSky);

// save it for jq to play with
$fp=fopen("dkSky.json", "w");
fwrite($fp, $dkSky);
fclose($fp);

?>


