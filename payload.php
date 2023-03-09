<?php $myfile = fopen("index.php", "r") or die("Unable to open file!"); echo fgets(base64_encode($myfile)); echo aaaa; fclose($myfile); ?>
