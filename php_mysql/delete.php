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
$sql = "DELETE FROM Info WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
    header("location:select.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
</body>
</html>