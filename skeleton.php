<?php

//Set values.
for ($i = 1; $i <= 100; $i++)
{
//Check for %3 & %5 first.
	if($i % 3 ==0 && $i % 5 ==0) 
	{ 
		echo "FizzBuzz\n";
	}
//If % 5 echo Buzz.
		else if($i % 5 ==0)
	{
	 	echo "Buzz\n";
	} 	
//If %3 echo Fizz.
	 	else if($i % 3 ==0)
    {
    	echo "Fizz\n";
    }
//If not %3 or %5 then echo $i.
     	else 
    {
    	echo $i . "\n";
    }
}
?>