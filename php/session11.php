<?php
$phpfile="abc.txt";
$filefunction=fopen($phpfile,"r")or Die("cannot open file".$phpfile);
echo "<h2> Display line by line"."</h2>"."<br>";
while(!feof($filefunction)){
	$displayfile=fgetc($filefunction);
	echo $displayfile."<br>";
}
?>
<?php

$file2="xyz.txt";
$function2=fopen($file2,'r');
echo "display data line by line read only <br>";
$adddata=fwrite($function2,"r+ place pointer at the beginning of file");
$function2=fopen($file2,'r+') or die("cannot open file".$file2);
while(!feof($function2)) // feof function return till end ofthe file 
{
$displayFile = fgets($function2); //fgets function display line by line
echo $displayFile."<br>";
}
?>

