#!/bin/bash

   # Sometimes there are alerts

if [ -e "jq '.alerts' dkSky.json" ]

then

   alrtDesc=$(jq -r '.alerts[1].description' dkSky.json)
   alrtTitle=$(jq -r '.alerts[1].title' dkSky.json)
   alrtTime=$(jq -r '.alerts[1].time' dkSky.json)
   alrtRegion=$(jq -r '.alerts[1].regions[]' dkSky.json)
   alrtUri=$(jq -r '.alerts[1].uri' dkSky.json)
   #date "+ %I:%M %p" --date=@$alrtTime


   echo $alrtTitle "for" $alrtRegion
   echo "<p>"
   echo $alrtDesc
   echo "<p>"
   echo $alrtUri

   # Sometimes there are no alerts
else
    return 42
fi
