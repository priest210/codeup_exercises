  <?php

//Write a program that prints the numbers from 1 to 100. 



for ($number = 1; $number <= 100; $number++) {
					

	$fizz = ($number % 3 == 0);
	$buzz = ($number % 5 == 0);
	$fizzbuzz = ($number % 15 == 0);

			if ($fizz) {
				echo "Fizz \n";
			}

			elseif ($buzz) {
				echo "Buzz \n";
			}

			elseif ($fizzbuzz) {
				echo "Fizz Buzz \n";
			}

			else echo "$number \n";
				
}
				

				
				

		


