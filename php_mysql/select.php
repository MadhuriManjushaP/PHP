<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include("connect_db.php");
	$sql="select * from Info";
	$employee_result=$conn->query($sql);
?>

<table border=1>
	<tr><th>Sno</th><th>FirstName</th><th>LastName</th><th>email</th><th>Phone</th><th>Actions</th><th>Actions</th></tr>
	<?php $x=""
;	while($row=$employee_result->fetch_assoc()){$x++;
		echo "<tr>
		<td>".$x."</td>
		<td>".$row['firstname']."</td>
		<td>".$row['lastname']."</td>
		<td>".$row['email']."</td>
		<td>".$row['phone']."</td>
		<td> <a href='delete.php?id=".$row['id']."'>Delete </a></td>
		<td> <a href='update_form.php?id=".$row['id']."'>Edit</a></td>
		</tr>";
	}
	?>
</table>
<a type="button" href="insert_form.php">Form</a>
</body>
</html>