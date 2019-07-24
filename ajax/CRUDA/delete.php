<?php


  include("connection.php");
   $id = $_POST["id"];
 
   


// sql to delete a record
  $sql = "delete from employee where id=".$id;
if ($conn->query($sql) === TRUE) {
    $sql= "select *from employee";
	$employee_result = $conn->query($sql);
	
	 
	$i= 1;
	$data ="<table border=1 id=employee_data>
					<thead id=table_content> <tr><td>SNO</td><td>Name</td> <td>Phone</td> <td>Address</td><td>Edit</td><td>Delete</td></tr></thead>";
	
	  while($row = $employee_result->fetch_assoc()) {

		  $data.= "<tr><td>$i</td><td>".$row["Name"]."</td><td>".$row["Phone"] ."</td><td>". $row["Address"]."</td><td><a href=edit.php?id=".$row["Id"].">Edit</a></td><td><input type=button class=row value=delete id =".$row["Id"]."> </td> </tr>";
		  $i++;
	  }
					
		echo $data;			
					
					 
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>