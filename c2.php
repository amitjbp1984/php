<html>
	<body>
		<form method="post">
		First Number<input type="text" name="t1"><br>
		Second Number<input type="text" name="t2"><br>
		<button name="b1">Add</button>
		</form>
	<?php
	class sc
	{
    		public $no1,$no2;
    		public function display($num1,$num2)
    		{
       			$no1=$num1;
       			$no2=$num2;
       			echo $no1 + $no2;
    		}
	}
	if(isset($_POST['b1']))
	{
		$a=$_POST['t1'];
		$b=$_POST['t2'];
		$obj=new sc();
  		$obj->display($a,$b);
	}
?>
</body>
</html>
