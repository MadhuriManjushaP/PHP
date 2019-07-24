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
<title>Untitled Document</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css" />
</head>

<body>

<h1> Welcome Admin </h1>

<?php  if ($_SESSION['user_type'] == "")
	{
		header("location:login.php");
	}
 ?>
<h2> <?php echo "User = ".$_SESSION["user_type"]?></h2>


</body>
</html>