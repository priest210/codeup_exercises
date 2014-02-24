<?php

// $names = ['Marc Andreessen', 'Tim Berners-Lee', 'Len Bosack', 'Steve Case', 'Vint Cerf', 'Len Kleinrock', 'J.C.R. Licklider', 'Bob Metcalfe', 'Ray Tomlinson'];

// $query = 'Tim Berners-Lee';

// $result = array_search($query, $names);

// // echo $result . "\n";

// if ($result) {
//     echo $names[$result] . "\n";
// }





// first names


$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];



// Create a function that returns TRUE or FALSE if an array value is found. 
// Search for Tina and Bob in $names. Make sure it works as expected.

function look_for($name, $array) {

	$found = array_search($name, $array);

	var_dump($found);
	
}

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. 
// Use the 2 example arrays and make sure your solution uses array_search().


look_for('Tina', $names);	


