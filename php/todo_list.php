<?php

// Update the code to allow upper and lowercase inputs from user for all menu items. 

// Test adding, removing, and quiting.

// Update the program to start numbering the list with 1 instead of 0. 

// Make sure remove still works as expected.



// Create array to hold list of todo items
$items = array();



// The loop!
do {
    // Iterate through list items
    foreach ($items as $key => $item) {
        // Display each item and a newline
        echo "[{$key}] {$item}\n";
    }

    
    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit : ';

    
    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = trim(fgets(STDIN));

    

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
    }


    elseif ($input == 'R') {
        echo 'Enter item number to remove: ';
        $key = trim(fgets(STDIN));
        unset($items[$key]);
    }


// Exit when input is (Q)uit
} while ($input != 'Q');



// Say Goodbye!
echo "Goodbye!\n";


// Exit with 0 errors
exit(0);