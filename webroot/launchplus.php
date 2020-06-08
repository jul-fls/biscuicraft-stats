<?php
$varfile = file_get_contents('launches.txt');
$var = $varfile + 1;
file_put_contents('launches.txt', $var);
echo $varfile;
?>
