WAP to check Even and Odd numbers
<html>
	<body>
		<form method="post">
		<Label>Enter  Number</Label>
		<input type="text" name="t1"><br>
		<input type="submit" value="Check" name="b1">
		</form>
		<?php
		if(isset($_POST['b1']))
		{
			$x=$_POST['t1'];
			if($x%2==0)
				echo "Even Number";
			else
				echo "Odd Number";
		}
		?>
	</body>
</html>
			

 
