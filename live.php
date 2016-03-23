<?php

$myFile = "live.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);

list($user, $pass, $lat, $long) = explode(",", $theData);

$search = $lat." , ".$long;

header("Location: https://maps.google.co.in/maps?q=$search");
exit;
?>


