<?php



$items = array();



function list_items($list) {


    //created $listed in order to append a value inside foreach
    $listed = "";

    foreach ($items as $key => $item) {
        
        $key +=1;
        
        $listed .= "[{$key}] {$item}\n";
    
    }
    
    return $listed;

}
    
    // Function to get the input from user

function get_input($upper = FALSE) {

            // Get STDIN, strip whitespace and newlines
    $input = strtoupper(trim(fgets(STDIN)));
    
    if ($input === TRUE) {
        
            // Convert to uppercase if $upper is true
        return strtoupper($input);        
    }
        else {
            
                // Return filtered STDIN input
            return $input;
        }

}
  
    //Function to call sorts

function sort_menu($sort_type) {

        echo "Choose sort type: (A)-Z, (Z)-A .\n";

        $input2 == strtoupper(trim(fgets(STDIN)));

        if ($input2 ==  'A'){
            
            asort($items);         
        }   

                    // (Z)-A

        else  {
  
            arsort($items);
        }

        return $input2;
        
}


        // Needs to echo When sort menu is opened, show the following options: 
        // (A)-Z, (Z)-A, (O)rder entered, (R)everse order entered


        // When a sort type is selected, 
        // order the TODO list accordingly and display the results.

// Loop!

do {
    
    // Show the menu options
    echo 'Please choose option: (N)ew item, (R)emove item, (Q)uit : ';

    $input = strtoupper(trim(fgets(STDIN)));
    
    // Check for actionable input
    if ($input == 'N') {
        echo 'Enter item: ';

        $items[] = trim(fgets(STDIN));
    } 
    // When I add [E]dit existing item option
    // Add [E]dit to menu above
    // elseif ($input == 'E'){
    //     echo 'Enter item to edit: ';
    //     $key = trim(fgets(STDIN));


    // array_values is how it reorders array

    elseif ($input == 'R') {
        
        // *** Need to List items for user to choose from *****
        print_r ($items);

        echo 'Enter item number to remove: ';
        
        $key = trim(fgets(STDIN));
        
        unset($items[$key -1]);
        
        $items = array_values($items);
    }


// Exit when input is (Q)uit
} while ($input != 'Q');



// Say Goodbye!
echo "Goodbye!\n";


// Exit with 0 errors
exit(0);