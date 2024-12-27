<?php  
$link = mysqli_connect("localhost", "root", "", "doctordb"); 
if ($link ==false) { 
    die("ERROR: Could not connect. ".mysqli_connect_error()); 
} 
?>
<html>
<body>
<form method="post">
Select Category <select name="t1">
<option value="Dentist">Dentist
<option value="Cardiology">Cardiology
</select>
Select Area <select name="t2">
<option value="Adhartal">Adhartal
<option value="Ranjhi">Ranjhi</select>
<input type="submit" value="show" name="s1">
</form>
</body>
<?php
if(isset($_POST['s1']))
{
$category=$_POST["t1"];
$area=$_POST["t2"];
$sql = "SELECT * FROM doctor where address='$area'"; 
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table border=1 Height=300 width=600 align=center>"; 
        echo "<tr bgcolor=blue>"; 
        echo "<th>Name</th>"; 
        echo "<th>Address</th>"; 
        echo "<th>Contact No</th>"; 
        echo "<th>Hospital Name</th>";
        echo "<th>Website</th>";
        echo "<th>Speciality</th>";
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['name']."</td>"; 
            echo "<td>".$row['address']."</td>"; 
            echo "<td>".$row['contactno']."</td>"; 
            echo "<td>".$row['hospital']."</td>";
            echo "<td>".$row['website']."</td>";
            echo "<td>".$row['speciality']."</td>";
            echo "</tr>"; 
        } 
        echo "</table>"; 
   }    
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
mysqli_close($link); 
?>