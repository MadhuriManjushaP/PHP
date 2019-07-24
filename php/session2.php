<html>
<head><title>PHP data types</title></head>
<body>
<?php
$x=10;

$name="Madhuri";
echo $x."<br>".$name;
$boolean=false;
if($boolean)
{
echo "<br>"."correct";
}
else{
echo "<br>"."wrong";
}
$languages=array("java","php","c","c++");
echo "<br>";
print_r($languages);
	$word=4;
	if(!isset($word))
	{
		echo "<br>"."variable is not set";
	}
	else{
		echo "<br>"."variable is set";
	}
	class student{
		function student(){
		   $this->firstname="mahesh";
			$this->lastname="kumar";
		}
	}
	$objectname=new student();
	echo "<br>".$objectname->firstname;
	echo "<br>".$objectname->lastname;
	
	?>
</body>

</html>