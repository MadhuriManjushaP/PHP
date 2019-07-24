<?php


  include("connect_db.php");
   $id = $_POST["id"];
 
   


// sql to delete a record
  $sql = "delete from Info where id=".$id;
if ($conn->query($sql) === TRUE) {
    $sql= "select * from Info";
	$employee_result = $conn->query($sql);
	
	 
	$i= 1;
	$data ="<table border=1 id=employee_data>
					<thead id=table_content> 
					<tr>
					<td>SNO</td>
					<td>firstname</td> 
					<td>lastname</td> 
					<td>email</td>
					<td>phone</td>
					<td>edit</td>
					<td>Delete</td>
					</tr>
					</thead>";
	
	  while($row = $employee_result->fetch_assoc()) {

		  $data.= "<tr>
		  <td>$i</td>
		  <td>".$row["firstname"]."</td>
		  <td>".$row["lastname"] ."</td>
		  <td>". $row["email"]."</td>
		  <td>". $row["phone"]."</td>
		  <td><a href=edit.php?id=".$row["id"].">Edit</a></td>
		  <td><input type=button class=row value=delete id =".$row["id"]."> </td> 
		  </tr>";
		  $i++;
	  }
					
		echo $data;			
					
					 
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>