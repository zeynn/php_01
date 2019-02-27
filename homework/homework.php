<?php
	$web=["Merve","Ayvaz","Sedat","Cenk"];
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport"content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">			
		<title>Web Guys</title>
	</head>
	<body>
		<!--<form>
			<input type="text" value="" />
			<input type="submit" value="OK" onclick="" />
		</form> -->
			<br />
			<?php	
				for($i=0; $i<count($web); $i++)
				{	
					if($web[$i]=="Merve"){
						$x='güzelsin';
						$y="bayansın.";
					} elseif($web[$i]=="Ayvaz" || $web[$i]=="Sedat"){
						$x='yakışıklısın';
						$y="erkeksin.";
					} else {
						$x='iyi değil mi ya?';
						$y="asgarisin!";
					}
					echo $web[$i].", bu gün çok ".$x." sen " .$y;
					echo '<br />';
				}
			?>	
	</body>
</html>
