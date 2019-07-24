<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Products </title>
</head>

<body>
<h3><?php  
	if (!isset($_SESSION['user']))
			{
				echo "You are not Looged in !!!" ;
				
			} 
		else 
		{
			
			echo "<h1>Welcome  ".$_SESSION['user']."</h1>";
			echo "<h2> User = ". $_SESSION['user_type']."</h2>";
		} 
	
	
	
	?></h3>
<h1> Products Page</h1>
</body>
</html>