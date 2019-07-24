<?php
 setcookie("name", "JOhn ", time()+3600, "/","", 0);
   setcookie("age", "36", time()+3600, "/", "",  0);


?>
<html>
	<head>
		<title>session9</title>
	</head>
	<body>
		<?php 
		echo "set cookies <br>";
		echo $_COOKIE["age"]."<br>";
		echo $_COOKIE["name"];
		?>

	</body>
</html>