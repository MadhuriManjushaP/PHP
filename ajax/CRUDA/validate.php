 <?php
session_start();
include("connection.php");
$uname = $_POST["uname"];
$password = $_POST["password"];

 $sql = "select * from users where email ='".$email."' and password = '".$password."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

//print_r ($row);
$num_rows = mysqli_num_rows($result);


if($num_rows > 0){
	 
	$_SESSION['user'] = $password;
	
	 
	if ($row['Dept'] == 1)
	{
		$_SESSION['user_type'] = "Admin";
		header('location:admin.php');
		
	}
	else
	{
		$_SESSION['user_type'] = "User";
		header('location:products.php');
	}
	 
	 
	
}
else{
	header('location:login.php');
}
?>
