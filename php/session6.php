<?php
echo "method 1"."<br>";
$class=array("student1","student2","studetn3");
$countArray=count($class);
print_r($class);
echo "<br>";
echo "<br><br>";  
echo  " Method 3<br><br>";  
echo $class[0]."<br>";   ////method 2 for 
echo $class[1]."<br>";   ////method 2 for display arrays
echo $class[2]."<br><br>"; 

////method 2 for display arrays
echo "method 2"."<br>";
echo "<br><br>";  
echo  "  Method 2 <br><br>";  
$i="";
for($i=0;$i<=$countArray;$i++)
{
echo $class[$i]."<br>" ; ////method 2 for display arrays
}





echo "Associative array <br>";
$classes =array("student1_name"=>"Sai"," student2_name"=>"Ram"," student3_name"=>"Raju");

//method 2 for display
foreach ($classes as $key=>$value) {
echo $key.'=>' . $value. '<br>';
}

//multi dimensional array student mark list

$marks = array(
array("Ram",50,60,80),
array("daisy",50,40,40),
array("orchid",70,30,80) 
); 
print_r($marks);
?>