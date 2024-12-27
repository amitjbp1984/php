<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Nishant";
fwrite($myfile, $txt);
$txt = "yawar\n";
fwrite($myfile, $txt);
fclose($myfile);
?> 