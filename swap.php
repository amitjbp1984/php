<html>
	<head>
		<title>Swap</title>
	</head>
	<body>
		<form method="post">
		<Label>Enter First Number</Label>
		<input type="text" name="t1"><br>
		<Label>Enter Second Number</Label>
		<input type="text" name="t2"><br>
		<input type="submit" name="b1" value="swap">
		<?php
			if(isset($_POST['b1']))
			{
			$a=$_POST['t1'];
			$b=$_POST['t2'];
			echo "Values before swap";
			echo "First Number",$a;
			echo "Second Number",$b;
			$a=$a+$b;
			$b=$a-$b;
			$a=$a-$b;
			echo "Values after swap";
			echo "First Number",$a;
			echo "Second Number",$b;
			}
		?>
	</body>
</html>