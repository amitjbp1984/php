<?php
$myfile = fopen("abc.txt", "w") or die("Unable to open file!");
$txt = "Itarsi\n";
fwrite($myfile, $txt);
$txt = "Nainpur\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
