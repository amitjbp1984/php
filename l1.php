<html>
	<body>
		<form method="post">
		<Label>Enter Number</Label>
		<input type="text" name="t1">		
		<input type="submit" name="b1">
		</form>
		<?php
		$fib=0;
		$x1=0;
		$x2=1;
                           if(isset($_POST['b1']))
		{
			$n=$_POST['t1'];
			for($i=1;$i<=$n;$i++)
			{
				$fib=$x1 + $x2;
				echo $fib;
				$x1=$x2;
				$x2=$fib;			
			}
			
		}
		?>
	
	</body>
</html>