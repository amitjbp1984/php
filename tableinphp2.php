<?php  
$link = mysqli_connect("localhost", "root", "", "testdb"); 
?>
<html>
<body>
<form method="post">
Enter Rollno <input type="text" name="t1">
<input type="submit" value="show" name="s1">
</form>
</body>
<?php
if(isset($_POST['s1']))
{
$sdata=$_POST["t1"];
$sql = "SELECT * FROM student where rollno='$sdata'"; 
if ($res = mysqli_query($link, $sql))
 { 
    if (mysqli_num_rows($res) > 0)
     { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>RollNo</th>"; 
        echo "<th>Name</th>"; 
        echo "<th>Class</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res))
         { 
            echo "<tr>"; 
            echo "<td>".$row['rollno']."</td>"; 
            echo "<td>".$row['name']."</td>"; 
            echo "<td>".$row['class']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
   }    
    } 
    else 
    { 
        echo "No matching records are found."; 
    } 
} 
mysqli_close($link); 
?>