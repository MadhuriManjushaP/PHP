<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Files</title>
</head>

<body>
<?php
	
$myfile=fopen("abc.txt",'r') or die("unable to open file"); //OPEN FILE IN READ MODE
$filesize=filesize("abc.txt");
echo fread($myfile,$filesize)."<br>";
	fclose($myfile);
	


?>
<?php
$file=fopen("abc.txt",'r');
	while(!feof($file))
	{
		echo fgetc($file);
	}
	fclose($file);
	?>
</body>
</html>