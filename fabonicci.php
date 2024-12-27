//wap to show fabonicci series
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
		$res=0;
		$x1=0;
		$x2=1;
		for($i=1;$i<=$no;$i++)
		{
			$res=$x1+$x2;
			echo $res;
			$x1=$x2;
			$x2=$res;
		}
	}
	?>
	</body>
</html>
