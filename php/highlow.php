<?php


// Dump arg count
var_dump($argc);
// Dump arg vars
var_dump($argv);

if($argc != 3){
	echo "Start over and input 2 numbers. \n";
	exit(0);
}

$min = $argv[1];
$max = $argv[2];

if (is_numeric("$min, $max")){
	echo "Enjoy your game!";
}


$guess = mt_rand (1,100);
$guess_count = 0;

fwrite(STDOUT, "Guess the number between 1 and 100. \n");
$guess_count++;
$answer = fgets(STDIN);

while ($answer != $guess){
		

	if($answer < $guess){
		echo "HIGHER ";

	} elseif ($answer > $guess){
	
		echo "Lower ";

	}
	
	$answer = fgets(STDIN);
	$guess_count++;
}

echo "GOOD GUESS. \n It took you $guess_count guess's \n \n \n";
exit(0);
?>




