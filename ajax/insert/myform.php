<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	include("connect_db.php");
	$name=$_POST['name'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$dept=$_POST['dept'];
	$salary=$_POST['salary'];

$sql = "INSERT INTO ajaxform (name, address, phone,dept,salary)
VALUES ('".$name."', '".$address."', '".$phone."','".$dept."','".$salary."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>