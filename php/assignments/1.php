<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	function units($x){
		
		if($x>=100 && $x<=200)
			echo "Price is 2.00"."<br>";
		elseif($x>=201 && $x<=350)
			echo "Price is 4.00"."<br>";
		elseif($x>=351 &&$x<=450)
			echo "Price is 5.00"."<br>";
		elseif($x>=451 && $x<=600)
			echo "Price is 6.00";
		else
			echo "not available"."<br>";
	}
	units(150);
	units(260);
	units(361);
	units(500);
	?>
</body>
</html>