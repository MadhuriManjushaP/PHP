<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php 
	include("connect_db.php");
	$id=$_GET['id'];
	$sql = "SELECT id, firstname, lastname,email,phonenumber FROM Info where id='$id'";
$employee_result = $conn->query($sql);
	$row = $employee_result->fetch_assoc();
		?>
	<div>
	<form method="get" action="update_data.php">
	<input type="text" name="id" placeholder="Enter id"  hidden value="<?php echo $row["id"]; ?>"></input>
	<input type="text" name="firstname" placeholder="Enter Firstname" value="<?php echo $row["firstname"];?>"></input>
	<input type="text" name="lastname" placeholder="Enter Lastname" value="<?php echo $row["lastname"];?>"></input>
	<input type="text" name="email" placeholder="Enter email" value="<?php echo $row["email"];?>"></input>
	<input type="text" name="phonenumber" placeholder="Enter phonenumber" value="<?php echo $row["phone"];?>"></input>
<input type="submit" name="submit_data" value="update data">
	</form>
</div>
	
</body>
</html>