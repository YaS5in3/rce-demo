<?php
$myfile = fopen(".passwd", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>
