<html>
	<head>
		<title>List</title>
	</head>
	<body>
	<?php
		
	$cars = array("Volvo", "BMW", "Toyota");
	rsort($cars);

	$clength = count($cars);
	for($x = 0; $x < $clength; $x++)
	 {
    		echo $cars[$x];
    		echo "<br>";
	}
	?>
	</body>
</html>