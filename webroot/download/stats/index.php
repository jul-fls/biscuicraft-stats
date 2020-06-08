<?php
require_once('../config.php');
$files = scandir(".");

foreach ($files as $file) {
	if (substr($file, -4) === ".log") {
		if ($nixWithExec) {
			$totalLines = intval(exec('wc -l ' . $file));
		} else {
			$totalLines = 0;
			$handle = fopen($file, "r");
			while(!feof($handle)){
			  $line = fgets($handle);
			  $totalLines++;
			}
			fclose($handle);
			$totalLines = $totalLines - 1; //This method counts the last empty line
		}
		print substr($file, 0, -4) . ": <a href=$file>" . $totalLines . "</a>";
		print "<br />";

	}
}
?>
.
