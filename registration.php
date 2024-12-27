<?php
$cn=mysqli_connect('localhost','root','','rohit1');
if(isset($_POST['sub']))
{
 $fn=$_POST['fnm'];
 $ln=$_POST['lnm'];
 $un=$_POST['unm'];
 $pas=$_POST['pss'];
 $dat=$_POST['dat'];
 $em=$_POST['ema'];
 $ad=$_POST['addr'];
 $gen=$_POST['gen'];
 $ho=implode(',',$_POST['hob']);

$qry="insert into restab(fname,lname,usrname,password,dat,email,address,gender,hobbies)values('$fn','$ln','$un','$pas','$dat','$em','$ad','$gen','$ho')";

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
<th>First Name:</th>
<td><input type="text" name="fnm" /></td>
</tr>
<tr>
<th>Last Name:</th>
<td><input type="text" name="lnm" /></td>
</tr>
<tr>
<th>UserName:</th>
<td><input type="text" name="unm" /></td>
</tr>
<tr>
<th>Password:</th>
<td><input type="password" name="pss" /></td>
</tr>
<tr>
<th>Date:</th>
<td><input type="date" name="dat" /></td>
</tr>

<tr>
<TH>Email:</TH>
<td><input type="mail" name="ema" /></td>
</tr>

<tr>
<th>Address:</th>
<td><textarea rows="7" cols="10" name="addr"></textarea></td>
</tr>

<tr>
<th>Gender:</th>
<td><input type="radio" name="gen" value="male" />male
<input type="radio" name="gen" value="female" />female
</td>
</tr>
<tr>
<th>Hobbies:</th>
<td><input type="checkbox" name="hob[]" value="chudaai" />chudaai
<input type="checkbox" name="hob[]" value="hanththela" />hanththela
<input type="checkbox" name="hob[]" value="nalla" />nalla

 </td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="sub" value="Submit" /></td>
</tr>
</table>
</form>
</body>
</html>
