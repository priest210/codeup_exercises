<?php


function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . "\n";
    } else {
    	echo "ERROR! Both numbers must be numeric \n";
    }
}

add(10, 'b');

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b . "\n";
    } else {
    	echo "ERROR! Both numbers must be numeric \n";
    }
    
}

subtract(75, 'b');

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b . "\n";
    } else {
    	echo "ERROR! Both numbers must be numeric \n";
    }
}

multiply(5, 'b');

function divide($a, $b) {
    if ($b == 0) {
    	echo "Both numbers must be greater than 0 \n";
    }
    elseif (is_numeric($a) && is_numeric($b)) {
    	echo $a / $b . "\n";
    } else {
    	echo "ERROR! Can\'t divide by zero \n";
    }
}

divide(20, 0);


function modulus($a, $b) {
	if ($b == 0) {
    	echo "Both numbers must be greater than 0 \n";
    }
    elseif (is_numeric($a) && is_numeric($b)) {
    	echo $a / $b . "\n";
    } else {
    	echo "ERROR! Can\'t divide by zero \n";
    }
}

modulus(10, 0);

?>