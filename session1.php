<?php
session_start();
?>

<html>
<body>
Enter Favourite Color<input name="t1"><br>
Enter Favourite Aninal<input name="t2"><br>
<button name="b1">Add</button>
<?php
if(isset($_POST['b1']))
{
$_SESSION["favcolor"] = $_POST['t1'];
$_SESSION["favanimal"] = $_POST['t2'];
echo $_SESSION["favcolor"];
echo $_SESSION["favanimal"];
}
?>

</body>
</html>