<?php

//Prompt user for a starting number and ending number, 
//then display all the numbers from the starting to ending using a for loop.


fwrite(STDOUT, "Please enter a starting number. \n");

	$starting_number = (intval(trim(fgets(STDIN))));
	

fwrite(STDOUT, "Please enter a ending number. \n"); 

	$ending_number = (intval(trim(fgets(STDIN))));	
	
fwrite(STDOUT, "Please choose a increment for the number count. \n");

	$increment = (intval(trim(fgets(STDIN))));

for($i = $starting_number; $i <= $ending_number; $i += $increment){
	echo "$i \n";
}

//Refactor to allow user to choose increment. (count by 1, 2, 10, ...)





