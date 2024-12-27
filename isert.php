<?php
	$i=mysqli_connect('localhost','root','','amit');
	if($i==true)
	
		echo "You are Correct";
	else
		echo "YOu are False";
	if(isset($_POST['sub']))
		{
			$a=$_POST['unm'];
			$b=$_POST['pass'];
			$in="insert into regs(username,password)values('$a','$b')";
			$inn=mysqli_query($i,$in);
		}
?>
<html>
	<head>
		<title>List</title>
	</head>
	<body>
		<form method="post">
			<table border="1">
			<tr>
				<td>Enter User Name:</td>
                                <td><input type="text" name="unm"/>
                    </td>    			
		</tr>
			<tr>
				<td>Enter Password:</td>
                          <td><input type="password" name="pass"/>
                </td>        			
		</tr>
			<tr>
                    <td colspan="2" align="center">
                 <input type="submit" name="sub">
                     </tr>
		