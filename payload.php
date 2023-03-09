<?php
$myfile = fopen("index.php", "r") or die("Unable to open file!");
echo base64_encode(fgets($myfile));
echo aaaa;
fclose($myfile);
?>
