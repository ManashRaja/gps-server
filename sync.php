<?php

$position = $_GET['src'];

$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone );
$time = $date->format( 'h:i:s A,D M jS Y' );


$pieces = explode(",", $position);

list($God, $valid, $lat, $latd, $long, $longd) = explode(",", $position);

//echo $God; 
//echo $valid;
//echo $lat;
//echo $latd;
//echo $long;
//echo $longd;


$degreelat=(int)($lat/100);
$minuteslat= $lat-($degreelat*100);
$dotdegreelat=$minuteslat/60;
$latitude= $degreelat + $dotdegreelat;
//echo $latitude;

if (($latd=="S"))
{ $latitude=$latitude*(-1);}
$latitude=number_format($latitude,4,'.','');

$degreelong=(int)($long/100);
$minuteslong= $long-($degreelong*100);
$dotdegreelong=$minuteslong/60;
$longitude=$degreelong+$dotdegreelong;
//echo $longitude;

if (($longd=="W"))
{ $longitude=$longitude*(-1);}
$longitude=number_format($longitude,4,'.',''); 


$savesentence = $God.",". $valid.",". $latitude.",". $longitude.",".$time;
//echo $savesentence;

$File = "live.txt"; 
$Handle = fopen($File, 'w');
$Data = $savesentence; 
fwrite($Handle, $Data); 
fclose($Handle); 

$myFile = "log.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $savesentence;
fwrite($fh, $stringData);
$stringData = "_";
fwrite($fh, $stringData);
fclose($fh);


$timesFile = "times.txt";
$fdo = fopen($timesFile, 'r');
$times = fread($fdo, filesize($timesFile));
fclose($fdo);

$timesFile = "times.txt"; 
$fdo = fopen($timesFile, 'w');
$times = $times + "1"; 
fwrite($fdo, $times); 
fclose($fdo);


?>


<html>
<body>
OK
</body>
</html>    