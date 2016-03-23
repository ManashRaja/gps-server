<?php
$timezone = new DateTimeZone("Asia/Kolkata" );
$date = new DateTime();
$date->setTimezone($timezone );
//echo  $date->format( 'h:i:s A  /  D, M jS, Y' );
$get = $date->format( 'h:i:s A,D M jS Y' );
echo $get;
?>