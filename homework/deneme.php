<?php 
	$msg="Say Hello";
	$message="<script>alert('$msg')</script>";
	echo $message;
	echo "<h3>It is my  first PHP code</h3>";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>*_*</title>
	</head>
	<body>
		<button onclick="myFunction()">Click Here</button>
		<p id="deneme"></p>
		
		<?php 
			echo '<script>
			function myFunction(){
				var mesaj;
				var x=prompt("enter ur name"," ");
				var y=x.toLowerCase();
				if(y==="merve" || y==="fatma"||y==="zeynep"){
					var z=" güzelsin";
				}
				else{
					var z=" yakişiklisin";
				}
				var a=y[0].toUpperCase();
				var i=1;
				for(i=1; i<y.length; i++){
					a=a+y[i];
				}
				mesaj= a + " bu gün çok " + z;
				document.getElementById("deneme").innerHTML=mesaj;
			}
			</script>'
		?>
		
	</body>
</html>

