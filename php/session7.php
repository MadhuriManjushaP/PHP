<?php
date_default_timezone_set("Asia/Calcutta"); //set time zone(by default America time 

$currentDate=date("d-m-Y H:i:s");
$birthDate = date("08-06-1986");
//Change date formate to with day ,month name
// we need format like this Sunday 08th june 1986
// step 1 change date to seconds calculating from  1970 to given date
$dateToSec = Strtotime($birthDate);
$dateToSec2 = Strtotime($currentDate);

echo "Total Seconds :".$dateToSec."<br>";  // 
echo "Total Seconds :".$dateToSec2."<br>";  // 

//Step 2 seconds to date format
echo "Change Date Format :".date("l dS F Y",$dateToSec)."<br>"; 
echo "Change Date Format :".date("l dS F Y",$dateToSec2); 

?>