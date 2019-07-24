<?php
if(isset($_FILES['file_name']))
{
	

$filename= $_FILES['file_name']['name'];
$filesize= $_FILES['file_name']['size'];
$filetype= $_FILES['file_name']['type'];
$filetmp= $_FILES['file_name']['tmp_name'];
$filepath= 'uploads/'.$filename;

	echo $filename."<br>".$filesize."<br>".$filetype."<br>".$filetmp."<br>".$filepath."<br>";

if($filesize <= 1024){
	echo 'file size should be less than or equal t0 1Mb';
	
}
else{
	move_uploaded_file($filetmp,$filepath);
	echo "successfully updated";
}
}
?>