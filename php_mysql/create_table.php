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
$sql = "CREATE TABLE Info (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
phone int(20)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table info created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 
</body>
</html>