<?php

include("connection.php");

$id= $_GET["id"];

$sql = "select * from employee where Id = ".$id;

 $result = $conn->query($sql);

$row = $result->fetch_assoc();




?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="GET" action="update.php">
	<input type="text" name="id" hidden value="<?php echo $row["Id"];?>"></input>
    
	<input type="text" name="fullname" placeholder="Enter Firstname"
    value="<?php echo $row["Name"];?>"></input>
   <input type="text" name="address" placeholder="Enter address"
    value="<?php echo $row["Address"];?>"></iput>
   <input type="text" name="phone" placeholder="Enter Phone"	
    value="<?php echo $row["Phone"];?>"></input>
    <input type="text" name="dept" placeholder="Enter dept"
     value="<?php echo $row["Dept"];?>"></input>
     <input type="text" name="salary" placeholder="Enter salary"
      value="<?php echo $row["Salary"];?>"></input>
     
     
    <input type="submit" name="submit_data" value="update data">
  
 </form>

</body>
</html>