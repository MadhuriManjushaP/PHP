<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>session4</title>
</head>

<body>
<?php
	echo "<h4> Arithmetic operators"."</h4>";
$marks1=80;
$marks2=70;
	$add=$marks1+$marks2;
	$sub=$marks1-$marks2;
	$mul=$marks1*$marks2;
	$div=$marks1/$marks2;
	$mod=$marks1%$marks2;
	$per=(($marks1+$marks2)/200)*100;
	echo $add."<br>".$sub."<br>".$mul."<br>".$div."<br>".$mod."<br>".$per."%"."<br>";
		echo "<h4> Comparision Operators"."</h4>";

	If($marks1==$marks2)
{
echo "Marks1 and Marks2 is equal <br>";    
}
If($marks1!=$marks2)
{
echo "Marks1 and Marks2 is not equal <br>"; 
}
if($marks1 > $marks2)
{
echo "Marks1 greater than   to Marks2 <br>";
}
if($marks1 >= $marks2)
{
echo "Marks1 greater than or equal   to M
arks2 <br>";
}
if($marks1 <= $marks2)
{
echo "Marks1 less than or equal to Marks2 <br>";
}
if($marks1 < $marks2)
{
echo "Marks1 less than   to Marks2 <br>";
}
else{
echo "Marks1 not less than or equal to Marks2 <br>";

}
if($marks1 === $marks2)
{
echo "Marks1 identical equal to Marks2"; // both operands should be equal to 

}
else{
echo "Marks1 not identical equal to Marks2";
}
	
			echo "<h4> Logical Operators"."</h4>";

$userName="abc";
$password="abc@12";
	if($userName=="abc"  and $password=="abc@123"){
		echo "<br>"."and operator,logged in"."<br>";
	}


$userPhone="123456789";
If(($userName=="abc" || $userPhone=="123456789") and $password=="abc@123")
{
echo "<br>"."Or Logical Operator: User Successfully loged in!"."<br>";  
}
else
{
echo "<br>"."login failed"."<br>";
}
			echo "<h4> Assignment Operators"."</h4>";

	$username="madhuri";
	$pwd="maddy";
	echo "username is"." ".$username."<br>";
	$username=$pwd;
	echo "password"." ".$username."<br>";
	
			echo "<h4> String Operators"."</h4>";

	$string1 = "Welcome to strings";
$string2 = "Php world";
echo "String 1 :".$string1."<br>"; // string1 display
echo "String 2 :".$string2."<br>"; // string1 display
echo "Concate two strings :".$string1.' and '.$string2."<br><br>"; 
echo "Replace strings to Php World :".str_replace("strings",$string2,$string1)."<br><br>"; 
echo "Change all letters to uppercase :".strtoupper($string1)."<br><br>"; 
echo "Change all letters to lowercase :".strtolower($string1)."<br><br>"; 
echo "Change every word first  letter to upercase :".ucwords($string1)."<br><br>"; 
echo "Change first letter to capital  :".ucfirst($string1)."<br><br>"; 
echo "length of string  :".strlen($string1)."<br><br>"; 
echo "words count  :".str_word_count($string1)."<br><br>"; 
echo "Position:".strPos($string1,"to")."<br><br>"; 
echo "Reverse String  :".strrev($string1)."<br><br>"; 
echo "String to Array  :";
$stringToArray=explode(' ',$string1); // string to array
print_r($stringToArray);

	?>
</body>
</html>