<?php

//Write a program that prints the numbers from 1 to 100. 



for ($number = 1; $number <= 100; $number++) {
					

	$fizz = ($number % 3 == 0);
	$buzz = ($number % 5 == 0);


			if ($fizz) {
				echo "Fizz \n";
			}

			if ($buzz) {
				echo "Buzz \n";
			}

			if ($number !== $fizz && $buzz) {
				echo "Fizz Buzz \n";
			}

			else echo "$number \n";
				
}
				

				
				

		


