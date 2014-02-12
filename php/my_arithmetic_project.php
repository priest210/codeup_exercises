<?php

do {
//
//***** Should these variables be inside or outside of do-while? ***
//
$add = add;
$subtract = subtract;
$multiply = multiply;
$divide = divide;
$modulus = modulus;

fwrite(STDOUT, "Please choose from add, subtract, multiply, divide or get modulus \n");

$choice = strtolower(trim(fgets(STDIN);
//
//******* How do I write this while portion below? *******
//
while ($choice != fgets(STDIN));
}

// Once entries are valid do-while & fwrite asking for 2 numbers.

fwrite(STDOUT, "Choose a number \n");

$number1 = (fgets(STDIN);


fwrite(STDOUT, "Choose another number \n");

$number2 = (fgets(STDIN);


// Make function that will check that entries are numeric

function areTheyNumeric($number1, $number2) {
	if (!is_numeric($number1)) {
    		echo "$number1 must be a number \n";
   }  
    elseif (!is_numeric($number2)) {
    		echo "$number2 must be a number \n";
   }

}

// Take valid entry and point to proper function to execute
// 			- maybe use a switch -

// Can you line all the function up and then place switch below?

	
// function add($number1, $number2)
// function subtract($number1, $number2)
// function multiply($number1, $number2)
// function divide($number1, $number2)
// function modulus($number1, $number2)




	switch ($choice) {
		case 'add':
			echo add($number1, $number2);
			break;

		case 'subtract':
			subtract($number1, $number2);
			break;

		case 'multiply':
			multiply($number1, $number2);
			break;

		case 'divide':
			divide($number1, $number2);
			break;

		case 'modulus':
			modulus($number1, $number2);
			break;
		
		default:
			# code...
			break;
	}



function add($a, $b) {
	return ($a + $b);
	
    // if (is_numeric($a) && is_numeric($b)) {
    // 	echo $a + $b . "\n";
    // } 
    // 	elseif (!is_numeric($a)) {
    // 		echo "$a must be a number \n";
    // 		} 
    // 	elseif (!is_numeric($b)) {
    // 		echo "$b must be a number \n";
    // 		}
}
  

add(10, 'b');

function subtract($a, $b) {
    // if (is_numeric($a) && is_numeric($b)) {
    // 	echo $a - $b . "\n";
    // } 
    // 	elseif (!is_numeric($a)) {
    // 		echo "$a must be a number \n";
    // 	} 
    // 	elseif (!is_numeric($b)) {
    // 		echo "$b must be a number \n";
    // 	}
    
}

subtract(75, 'b');

function multiply($a, $b) {
    // if (is_numeric($a) && is_numeric($b)) {
    // 	echo $a * $b . "\n";
    // } 
    // 	elseif (!is_numeric($a)) {
    // 		echo "$a must be a number \n";
    // 	} 
    // 	elseif (!is_numeric($b)) {
    // 		echo "$b must be a number \n";
    // 	}
}

multiply(5, 'b');

function divide($a, $b) {
    // if ($b == 0) {
    // 	echo "Both numbers must be greater than 0 \n";
    // }
    // elseif (is_numeric($a) && is_numeric($b)) {
    // 	echo $a / $b . "\n";
    // } else {
    // 	echo "ERROR! Cannot use $b.  Can\'t divide by 0. \n";
    // }
}

divide(20, 0);


function modulus($a, $b) {
	// if ($b == 0) {
 //    	echo "Both numbers must be greater than 0 \n";
 //    }
 //    elseif (is_numeric($a) && is_numeric($b)) {
 //    	echo $a / $b . "\n";
 //    } else {
 //    	echo "Cannot use $b.  Can\'t divide by 0. \n";
 //    }
}

modulus(10, 0);

?>