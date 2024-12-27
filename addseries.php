//wap to show sum of n numbers
<html>
	<body>
	<form method="post">
	<Label>Enter a number</Label>
	<input type="text" name="t1"><br>
	<input type="submit" name="b1" value="Save">
	</form>
	<?php
	if(isset($_POST['b1']))
	{
		$no=$_POST['t1'];
		$res=0;
		for($i=1;$i<=$no;$i++)
		{
			$res=$res+$i;
		}
		echo "Addition is",$res;
	}
	?>
	</body>
</html>