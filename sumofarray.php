<html>
	<head>
		<title>Array</title>
	</head>
	<body>
	<?php
		$no = array( 1, 2, 3, 4, 5);
		$sum=0;
		for($i=1;$i<=5;$i++)
		{
			$sum=$sum+$no[$i];
		}
		echo $sum;
		
	?>
	</body>
</html>