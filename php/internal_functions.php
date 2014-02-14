<?php


$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"


function variable_check($var) {
		
		// is variable set?

		if (isset($var)) {
			return "$var is set \n";
		}
		
		elseif (empty($var)) {
			return "$var is not set \n";
		}
	

}


echo "\$nothing" . variable_check($nothing)  . "\n";

echo "\$something" . variable_check($something)  . "\n";

$red = serialize($array) . "\n";

echo $red;

var_dump (unserialize($red));




// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results