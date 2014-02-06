<?php



//Alter your loop to count backwards by 5's from 100 to -10.

$a = 2;

do {
	echo "{$a}\n";
	$a *= $a;
} while ($a <= 1000000);
