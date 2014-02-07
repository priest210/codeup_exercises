<?php

//Prompt user for a starting number and ending number, 
//then display all the numbers from the starting to ending using a for loop.


fwrite(STDOUT, "Please enter a starting number. \n");

	$starting_number = (intval(trim(fgets(STDIN))));
	

fwrite(STDOUT, "Please enter a ending number. \n"); 

	$ending_number = (intval(trim(fgets(STDIN))));	
	


for($i = $starting_number; $i <= $ending_number; $i++){
	echo "$i \n";
}







