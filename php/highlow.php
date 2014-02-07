<?php

//- game picks a random number between 1 and 100.
//- prompts user to guess the number
//- if user's guess is less than the number, it outputs "HIGHER"/
//- if user's guess is more than the number, it outputs "LOWER"
//- if a user guesses the number, the game should declare "GOOD GUESS!"

//Hints:
//- Using conditionals and loops here is important
//- Random numbers can be made with the internal rand() function
//- If user is right, tell them they won
//- While they are wrong, give them hints and keep asking
//- Use exit(0) to end the game
//- If you get stuck in game, ctrl-c will exit.



$guess = mt_rand (1,100);


fwrite(STDOUT, "Guess the number between 1 and 100. ");

$answer = fgets(STDIN);

while ($answer != $guess){
		

	if($answer < $guess){
		echo "HIGHER ";

	} elseif ($answer > $guess){
	
		echo "Lower ";

	}
	
	$answer = fgets(STDIN);
}

echo "GOOD GUESS ";
exit(0);
?>




