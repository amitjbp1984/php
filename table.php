//wap to show table of Entered no using for loop
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
		$no=$_POST['t1'];
		for($i=1;$i<=10;$i++)
		{
			$res=$no*$i;
			echo $res;
		}
	}
	?>
	</body>
</html>


