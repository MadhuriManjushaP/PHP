<html>
<head>
</head>
<body>
<?php
$name1 ="Syntax error" // here missing semicolon
echo $Name1; // variable are case sensitive so here show syntax error
$name ="Notice error";
echo $Name; // variable are case sensitive so here show syntax error
include("header.php");
	function fun_name() {
echo "venkatesh";
		student();// there is no student() function but we call the function 
}
	define("DBNAME", "my_db");
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
echo DBNAME. "<br>";   //display constants
echo HOST. "<br>";
echo USER. "<br>"; 
echo PASSWORD. "<br>";
?>
</body>
</html>