<html>
	<body>
		<form method="post">
		Enter Number<input type="text" name="t1">
		<button name="b1">Show Result</button>
		</form>
		<?php
		class test
		{	
			public $n;
			function result1($x)
			{
				$n=$x;
				echo $n*$n*$n;
			}
		}
			
		class apply extends test
		{
			function result2($m)
			{
				$n=$m;
				echo $n*$n;
			}
		}
		if(isset($_POST['b1']))
		{
			$s=$_POST['t1'];
			$ap=new apply();
			$ap->result1($s);
			$ap->result2($s);
		}
		?>
	</body>
</html>