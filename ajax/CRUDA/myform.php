 <?php
 include("connection.php");
   	    $fname = $_POST['fullname'];
	    $address = $_POST['address'];
	    $phone = $_POST['phone'];
 		$salary = $_POST['salary'];
	    $dept = $_POST['dept'];
	    $user_type=  0;
	  
	  $sql = "INSERT INTO employee (name, address, phone,dept)
	   VALUES ('".$fname."','".$address."','".$phone."','".$dept."')";

		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	   	$conn->close();
  



?>