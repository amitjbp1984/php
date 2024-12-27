//WAP to check greater than 2 numbers
<html>
	<body>
		<form method="post">
		<Label>Enter First Number</Label>
		<input type="text" name="t1"><br>
		<Label>Enter Second Number</Label>
		<input type="text" name="t2"><br>
		<input type="submit" value="Compare" name="b1">
		</form>
		<?php
		if(isset($_POST['b1']))
		{
			$x=$_POST['t1'];
			$y=$_POST['t2'];
			if($x>$y)
				echo "Greater Number is" , $x;
			else
				echo "Greater Number is", $y;
		}
		?>
	</body>
</html>
			

 
