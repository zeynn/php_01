<!DOCTYPE html>
<html lang="tr">
	<head>
		<title>+_+</title>
	</head>
	<body>
		<form method="post">
			<input type="text" name="name">
			<input type="submit" value="Submit" name="submit">
		</form>

		<h1>
			<?php
				if(isset($_POST['submit']))
				{
					echo  "Welcome ".$_POST["name"];
				}
				
			?>
		</h1>
	</body>
</html>