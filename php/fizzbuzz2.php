fizzbuzz2.php

<?php

$number = 1;

while ($number <= 100) {
	
	if($number %3 == 0) {

		echo "fizz \n";
	}

	else if($number %5 == 0) {

		echo "buzz \n";
	}

	else if($number %15 == 0) {

		echo "fizzbuzz \n";
	}

	else {

		echo "$number \n";
	}

	$number++;

}