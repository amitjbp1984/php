<html>
	<body>
		<?php
			$file=fopen("welcome.txt","r");
			while(!feof($file))
			{
				echo fgets($file);
			}
			fclose($file);
		?>
	</body>
</html>