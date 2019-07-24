<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php 
	include("connect_db.php");
	if(isset($_GET['submit_data'])){
	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	$email =$_GET['email'];
	$phonenumber = $_GET['phone'];
	$id = $_GET['id'];
		$sql = "update Info SET firstname= '".$firstname."', lastname= '".$lastname."',email= '".$email."',phone= '".$phonenumber."'  where id='".$id."'";
		if ($conn->query($sql)=== TRUE){
			 header("location:select.php");
		}
		else {
			 echo "Error:".$sql."<br>".$conn->error;
		}
		$conn->close();
	}
		
		 
	?>
</body>
</html>