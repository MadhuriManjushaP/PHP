 <?php

 include("connection.php");

if (isset($_GET['submit_data']))
   {
	   	
	    $fname = $_GET['fullname'];
	    $address = $_GET['address'];
	    $phone = $_GET['phone'];
	    $dept = $_GET['dept'];
	    $id = $_GET['id'];
	   
	   
	  $sql = "update employee set name = '".$fname."',address = '".$address."',phone = '".$phone."',dept='".$dept."' where Id =".$id; 
	   
	 

		if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	   	$conn->close();
  }



?>