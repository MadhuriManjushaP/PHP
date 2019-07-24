<?php
if(isset($_POST['submit_form']))
{
	echo $_POST['fname']."<br>";
	echo $_POST['lname']."<br>";
	echo $_POST['email']."<br>";
	echo $_POST['phonenum']."<br>";

}
else{
	header('location:myform.php');
}
?>