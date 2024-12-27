<?php
$user='root';
$pass='';
$db='dbtest';

$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to Connect");
echo "Connection Succesfully";
?>

<html>
<head>
</head>
<body>
<form method="post">
Rollno<input type="text" name="t1"/><br>
Name<input type="text" name="t2"/><br>
Class<input type="text" name="t3"/><br>
Enter Rollno<input type="text" name="t4"/><br>
<input type="submit" value="Save"name="b1"/>
<input type="Submit" Value="Delete" name="b2"/>
<input type="Submit" value="Update" name="b3"/>
<input type="submit" value="Show" name="b4"/>
<input type="submit" value="Show All" name="b5"/>
</form><br><br>
<?php
if(isset($_POST["b1"]))
{
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"dbtest");
$a = $_POST["t1"];
$b = $_POST["t2"];
$c = $_POST["t3"];
$query="insert into student(rollno,name,class) values($a,'$b','$c')";
mysqli_query($link, $query);
echo "Data inserted";
}
if(isset($_POST["b2"]))
{
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"dbtest");
$rollno=$_POST["t4"];
$delquery="Delete from student where rollno='$rollno'";
$data=mysqli_query($link,$delquery);
echo "Record Deleted";
}
?>
<?php
if(isset($_POST["b3"]))
{
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"dbtest");
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$rollupno=$_POST["t4"];
$updquery="update student set rollno=$a,name='$b',class='$c' where rollno='$rollupno'";
mysqli_query($link,$updquery);
echo "Record Updated";
}
?>
<?php
if(isset($_POST["b4"]))
{
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"dbtest");
$seldata=$_POST["t4"];
$query="select * from student where rollno='$seldata'";
$data=mysqli_query($link,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
echo $result['rollno']." ".$result['name']." ".$result['class'];
}
?>
<?php
if(isset($_POST["b5"]))
{
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"testdb");
$query="select * from student";
$data=mysqli_query($link,$query);
$total=mysqli_num_rows($data);
if( $total !=0 )
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo $result['rollno']." ".$result['name']." ".$result['class']."<br>";
	}
}
else
{
		echo "No Record Found";
}
}
?>
</body>
</html>
