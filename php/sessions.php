 <?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
	$_SESSION["favcolor"]="green";
	$_SESSION["favanimal"]="dog";

// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
?>
	<?php
	$_SESSION["favcolor"]="green";
	$_SESSION["favanimal"]="dog";
print_r($_SESSION);
	?>
	
</body>
</html> 