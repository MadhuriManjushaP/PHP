<?php

date_default_timezone_set("Asia/Calcutta"); //set time zone(by default America time 

$currentDate=date("d-m-Y H:i:s"); // get current date ,date fun

if($currentDate)
{
echo "Current Year: ".date("Y")."<br>";
echo "Current Year only last two digits: ".date("y")."<br>";
echo "Current day name: ".date("l")."<br>";
echo "Current day name only first three letters: ".date("D")."<br>";
echo "Numeric representation of the day of the week: ".date("w")."<br>";
echo "Current month name : ".date("F")."<br>";
echo "Current month name only first three letters: ".date("M")."<br>";
echo "Numeric representation of a  current month, with leading zeros: ".date("m")."<br>";
echo "Numeric representation of a cu rrent month, without leading zeros: ".date("n")."<br>";
echo "Current Time with 24 hours formate: ".date("H:i:s")."<br>";
echo "Current Time with 12 hours formate with lower case am/pm: ".date("h:i:s a")."<br>";
echo "Current Time with 12 hours formate with upper case am/pm: ".date("h:i:s A")."<br>";
}
?>