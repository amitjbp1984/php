<html>
<body>
<form method="post" >
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name))
 {
    echo "Name is empty";
  } else 
{
    echo "Enteed Name is ",$name;
  }
}
?>

</body>
</html>