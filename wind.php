<?php
$windFrom=($foreCast['currently']['windBearing']);
switch($windFrom)
 {
 case  $windFrom  <= 23;
 echo "N";
 break;
 case    $windFrom <= 45;
 echo "NNE";
 break;
 case   $windFrom <= 68;
 echo "NE";
 break;
 case   $windFrom <= 90;
 echo "E";
 break;
 case   $windFrom <= 113;
 echo "ESE";
 break;
 case   $windFrom <= 135;
 echo "SE";
 break;
 case   $windFrom <= 158;
 echo "SSE";
 break;
 case   $windFrom <= 180;
 echo "S";
 break;
 case   $windFrom <= 203;
 echo "SSW";
 break;
 case   $windFrom <= 225;
 echo "SW";
 break;
 case   $windFrom <= 248;
 echo "WSW";
 break;
 case   $windFrom <= 270;
 echo "W";
 break;
 case   $windFrom <= 293;
 echo "WNW";
 break;
 case   $windFrom <= 315;
 echo "NW";
 break;
 case   $windFrom <= 338;
 echo "N";
 break;
}
//echo "<br>";
?>   
   
