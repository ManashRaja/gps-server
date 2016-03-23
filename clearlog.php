<?php

$File = "log.txt"; 
$Handle = fopen($File, 'w');
$Data = ""; 
fwrite($Handle, $Data); 
fclose($Handle);

$File = "times.txt"; 
$Handle = fopen($File, 'w');
$Data = "0"; 
fwrite($Handle, $Data); 
fclose($Handle);

?>


<html>
<body>
OK
</body>
</html>
    