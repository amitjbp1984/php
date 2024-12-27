<html>
	<body>
		<form method="post">
		<Label>First number</Label>
		<input type="text" name="t1"><br>
		<Label>Second number</Label>
		<input type="text" name="t2"><br>
		<input type="submit" name="b1" value="Save">
		</form>
		<?php
           	function sum($x,$y)
		{
			return $x+$y;
		}
		
		if(isset($_POST['b1']))
		{
			$n1=$_POST['t1'];
			$n2=$_POST['t2'];
			echo "Addition is",sum($n1,$n2);
		}
			
		?>
	</body>
</html>
		