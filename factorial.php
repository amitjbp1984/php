//wap to show factorial of Entered no
<html>
	<body>
	<form method="post">
	<Label>Enter a number</Label>
	<input type="text" name="t1"><br>
	<input type="submit" name="b1" value="Enter">
	</form>
	<?php
	if(isset($_POST['b1']))
	{
		$fact=1;
		$no=$_POST['t1'];
		for($i=$no;$i>=1;$i--)
		{
			$fact=$fact * $i;
		}
		echo "Factorial is" , $fact;
	}
	?>
	</body>
</html>