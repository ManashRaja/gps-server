<?php

$deg_coord = $_GET['src'];
//reference http://www.directionsmag.com/site/latlong-converter
//GPS/NMEA fixes are in Degree Minutes.m format
//for google maps we need to convert them to decimal degress
//sample format of gps 4533.35 is 45 degrees and 33.35 minutes
//formula is as follows
//Degrees=Degrees
//.d = M.m/60
//Decimal Degrees=Degrees+.d

$degree=(int)($deg_coord/100); //simple way
$minutes= $deg_coord-($degree*100);
$dotdegree=$minutes/60;
$decimal=$degree+$dotdegree;

//return $decimal;

echo $decimal;

?>



