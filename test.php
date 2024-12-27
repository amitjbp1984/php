<html>
	<body>
		<form method="post">
		Buyer Name<input type="text" name="t1"><br>
		Mobile No<input type="text" name="t2"><br>
		Sweets<input type="text" name="t3"><br>
		Quantity<input type="text" name="t4"><br>
		Address<input type="text" name="t5"><br>
		<button name="b1">Order Now</button>
		</form>
		<?php

		if(isset($_POST["b1"]))
		{	
		$link=mysqli_connect("localhost","root","");
		mysqli_select_db($link,"start");
		$a = $_POST["t1"];
		$b = $_POST["t2"];
		$c = $_POST["t3"];
		$d = $_POST["t4"];
		$e = $_POST["t5"];
		$query="insert into sweets(buyer,mobileno,sweets,quantity,address) values('$a','$b','$c','$d','$e')";
		mysqli_query($link, $query);
		echo "Data inserted";
}
