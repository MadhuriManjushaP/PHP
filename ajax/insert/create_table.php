<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
 <?php


include("connect_db.php");
// sql to create table
$sql = "CREATE TABLE Ajaxform (
name varchar(200),
address varchar(500),
phone int(12),
dept int(5),
salary float(7,2))";

if ($conn->query($sql) === TRUE) {
    echo "Table Ajaxform created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 
</body>
</html>