<?php

function interest($p,$t,$r){
	$si="";
	$si=($p*$t*$r)/100;
	return $si;
}

$int=interest(1000,2,5);
echo "interest rate is".$int;

?>