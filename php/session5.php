<?php
$fruits="lemon";
switch ($fruits)
{
case "apple":
echo "Apple fruit";
break;
case "orange":
echo "Orange fruit";
break;
case "mango":
echo "mango fruit";
break;
default:
echo "no fruit available";
}



echo "<h4> for loop"."</h4>";
for($i=0;$i<=20;$i++){
echo "The Student Number is".$i."<br>";
}


for($i=1;$i<=5;$i++){
	for($j=0;$j<$i;$j++){
		
		echo "*";
	}
	echo "<br>";
}



?>