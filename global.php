<html>
<body>

<?php 
$x = 75;
$y = 25; 

function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
  echo $GLOBALS['z']; 
}

addition();
?>

</body>
</html>
