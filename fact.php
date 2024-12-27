<html>
	<head>
		<title>Factorial</title>
	</head>
	<body>
		<?php
			$no=5;
			$fact=1;
			for($i=$no;$i>=1;$i--)
			{
				$fact=$fact*$i;
			}
			echo $fact;
		?>
	</body>
</html>