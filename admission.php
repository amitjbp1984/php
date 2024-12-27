<?php
$cn=mysqli_connect('localhost','root','','emp');
if(isset($_POST['sub']))
{
 $fn=$_POST['rno'];
 $ln=$_POST['enro'];
 $un=$_POST['sname'];
 $pas=$_POST['sem'];
 
$qry="insert into admission(rollno,enrollno,name,class)values('$fn','$ln','$un','$pas')";

mysqli_query($cn,$qry);
echo"Data Saved........!!!";
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
<table align="center" border="2">
<tr>
<th>Roll No:</th>
<td><input type="text" name="rno" /></td>
</tr>
<tr>
<th>Enrollment No:</th>
<td><input type="text" name="enro" /></td>
</tr>
<tr>
<th>Student Name:</th>
<td><input type="text" name="sname" /></td>
</tr>
<tr>
<th>class and sem:</th>
<td><input type="password" name="sem" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="sub" value="Submit" /></td>
</tr>
</table>
</form>
</body>
</html>
