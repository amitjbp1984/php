<html>
	<body>
		<form method="post">
		<Label>Enter  First number</Label>
		<input type="text" name="t1">
		<Label>Enter Second number</Label>
		<input type="text" name="t2">
		<input type="submit" name="b1" value="compare">
		</form>
		<?php
		if(isset($_POST['b1']))
		{
			$a=$_POST['t1'];
			$b=$_POST['t2'];
			if($a>$b)
				echo "First no is Greater";
			else
				echo "Second no is Greater";
		}
		?>
	</body>
</html>