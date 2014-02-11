<?php


function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . "\n";
    } 
    	elseif (!is_numeric($a)) {
    		echo "$a must be a number \n";
    		} 
    	elseif (!is_numeric($b)) {
    		echo "$b must be a number \n";
    		}
}
  

add(10, 'b');

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b . "\n";
    } 
    	elseif (!is_numeric($a)) {
    		echo "$a must be a number \n";
    	} 
    	elseif (!is_numeric($b)) {
    		echo "$b must be a number \n";
    	}
    
}

subtract(75, 'b');

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b . "\n";
    } 
    	elseif (!is_numeric($a)) {
    		echo "$a must be a number \n";
    	} 
    	elseif (!is_numeric($b)) {
    		echo "$b must be a number \n";
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
    	echo "ERROR! Cannot use $b.  Can\'t divide by 0. \n";
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
    	echo "Cannot use $b.  Can\'t divide by 0. \n";
    }
}

modulus(10, 0);

?>