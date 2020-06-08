<?php
$Exefile = "Biscuicraft.exe.log";
$totalExeLines = intval(exec('wc -l ' . $Exefile));
$Jarfile = "Biscuicraft.jar.log";
$totalJarLines = intval(exec('wc -l ' . $Jarfile));
echo ($totalExeLines + $totalJarLines);
?>
.
