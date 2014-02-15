<?php


function list_items($list) {


    //created $listed in order to append some value inside foreach
    $listed = "";

    foreach ($items as $key => $item) {
        $key +=1;
        
        $listed .= "[{$key}] {$item}\n";
    
    }
    // $listed is an array variable created array to hold list of todo items 
    return $listed;

    	//****************************************************

function get_input($upper = FALSE) {

		// Get STDIN, strip whitespace and newlines,
    $input = trim(fgets(STDIN)));
    
    if ($input === TRUE) {

    	// Convert to uppercase if $upper is true
        return strtoupper($input);        
    }
        else {
            
        		// Return filtered STDIN input
            return $input;
        }

}
    
    	//****************************************************
		

		

