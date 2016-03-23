<?php

$position = $_GET['src'];
$File = "live.txt"; 
$Handle = fopen($File, 'w');
$Data = $position; 
fwrite($Handle, $Data); 
fclose($Handle); 

$myFile = "log.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $position;
fwrite($fh, $stringData);
$stringData = "_";
fwrite($fh, $stringData);
fclose($fh);


?>


<html>
<body>
OK
</body>
</html>
    