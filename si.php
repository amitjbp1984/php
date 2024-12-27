<html>
	<body>
		<form method="post">
		Prinicipal<input name="t1"><br>
		Rate<input name="t2"><br>
		Time<input name="t3"><br>
		<button name="b1">Simple Interest</button>
		</form>
		<?php
		if(isset($_POST['b1']))
		{
			$p=$_POST['t1'];
			$r=$_POST['t2'];
			$t=$_POST['t3'];
			$si=($p*$r*$t)/100;
			echo $si;
		}
		?>
	</body>
</html>

Wap to Show Square and Cube of Entered No
Conditional Statement
