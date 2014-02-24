<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';


$physicists_array = explode(', ', $physicists_string);

// var_dump($physicists_array);

print_r($physicists_array);

	

	function array_sentence($physicists, $sort = FALSE) {

		
			$physicists_array = explode(', ', $physicists);

			if ($sort == TRUE) {

				sort($physicists_array);
			}

			$last_person = array_pop($physicists_array);

			return implode(', ', $physicists_array) . ", and $last_person";

	}

	$physicists_list = array_sentence($physicists_string, TRUE);

	echo "Some of the most famous fictional theoretical physicists are {$physicists_list}. \n";







