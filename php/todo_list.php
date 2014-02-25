<?php



$items = array();



function list_items($list) {


    //created $listed in order to append a value inside foreach
    $listed = "";

    foreach ($list as $key => $item) {
        
        $listed .= $item . PHP_EOL;
        
    }
    
    return $listed;

}
    
    // Function to get the input from user

function get_input($upper = FALSE) {

            // Get STDIN, strip whitespace and newlines
    $input = trim(fgets(STDIN));
    
    if ($upper === TRUE) {
        
            // Convert to uppercase if $upper is true
        return strtoupper($input);        
    }
        else {
                         // Return filtered STDIN input
            return $input;
        }

}
  
    //Function to call sorts

function sort_menu(&$items) {


        echo "Choose sort type: (A)-Z, (Z)-A .\n";

        $input2 = strtoupper(trim(fgets(STDIN)));

        if ($input2 ==  'A'){
            
            asort($items); 

            return $items;        
        }   

        else  {
  
            arsort($items);

            return $items;
        }

        list_items ($items);
        
}

function read_file($filename) {

        $handle = fopen($filename, "r");

        $contents = fread($handle, filesize($filename));

        $contents_array = explode("\n", $contents);

        fclose($handle);

        print_r($contents_array);


}


// Loop!



do {
    
    echo list_items ($items);
    
    // Add a file menu option to the main menu in your TODO list app. 
    // In this file menu create a (O)pen file option. 
    // The user should be able to enter the path to a file to have it loaded.

    // Show the menu options
    echo 'Please choose option: (N)ew item, (S)ort, (O)pen file, s(A)ve, (R)emove item, (Q)uit : ';

    $input = get_input(TRUE);
    
    // Check for actionable input
    if ($input == 'N') {
        
        echo 'Enter item: ';

        $new_item = get_input();

        // ask user where to put item

        echo 'Place new item at (B)eginning or (E)nd of list? ';

        // get user's answer

        $where = get_input(TRUE);

        // array_push/array_unshift new_item

        if ($where == 'B') {

            array_unshift($items, $new_item);
        }

        else {
            array_push($items, $new_item);
        }
    } 
    
    
    elseif ($input == 'S') {

       $sort_return = sort_menu ($items);

       // echo $sort_return;
    }

    elseif ($input == 'O') {

        $filename = get_input();
        
        read_file($filename);

        
    }

    elseif ($input == 'A') {

        $filename = get_input();

        //create call for function for #2

        // create function at top to explode contents of file into array
        // edit file, edit array, implode back to string and then save.

        
    }
    
    // array_values is how it reorders array

    elseif ($input == 'R') {
        
        // *** Need to List items for user to choose from *****
        
        $items = array_values($items);

        print_r ($items);

        echo 'Enter item number to remove: ';
        
        $key = trim(fgets(STDIN));
        
        unset($items[$key -1]);
        
        $items = array_values($items);
    }

    elseif ($input == 'F') {

        $remove_front = array_shift($items);

    }

    elseif ($input == 'L') {
        
        $remove_end = array_pop($items);
    }


// Exit when input is (Q)uit
} while ($input != 'Q');



// Say Goodbye!
echo "Goodbye!\n";


// Exit with 0 errors
exit(0);