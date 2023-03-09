<?php 
$file_contents = file_get_contents('index.php'); 
echo base64_encode($file_contents); 
?>
