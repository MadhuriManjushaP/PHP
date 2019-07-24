<?php 

function even($low,$high){
	  echo "even numbers <br>";

  
for(;$low<=$high;$low++)
	
	{
		if($low%2==0)
			
			echo $low."<br>";
			
		
		
		}
		
	}

function odd($low,$high){
	
  echo "odd numbers <br>";
for(;$low<=$high;$low++)
	
	{
		if($low%2!=0)
			
			echo $low."<br>";
			
		
		
		}
		
	}
even(10,20);
odd(10,20);
even(20,50);
odd(40,60);
?>