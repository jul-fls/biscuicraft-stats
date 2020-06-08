<?php
$filefolder = 'files/';
$statsfolder = 'stats/';

$nixWithExec = true;

date_default_timezone_set('Europe/Paris');

$clientInfo = $_SERVER['REMOTE_ADDR'] . " - [" . date('j/M/Y:G:i:s T')  . "] - '" . $_SERVER['HTTP_USER_AGENT'] . "' - " . $_SERVER['HTTP_REFERER'] . "\n"; 
?>
.
