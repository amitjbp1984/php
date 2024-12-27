<html>
	<head>
		<title>Demo</title>
	</head>
	<body>
		<form method="post">
		<Label>Enter a Character</Label>
		<input type="text" name="t1">
		<input type="submit" name="b1" value="save">
		</form>
		<?php 
			if(isset($_POST['b1']))
			{
			$ch=$_POST['t1'];
			switch($ch)
			{
				case "a":
					echo "Vowel";
					break;
				case "e":
					echo "Vowel";
					break;
				case "i":
					echo "Vowel";
					break;
				case "o":
					echo "Vowel";
					break;
				case "u":
					echo "Vowel";
					break;
				default:
					echo "Consonant";
					break;
			}
		}
		?>
	</body>
</html>