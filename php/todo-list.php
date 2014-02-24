<!DOCTYPE html>

<html>

<head>
		<title>TODO List</title>
</head>
	
	<body>
        
     <h1>TODO List</h1>

        <ul>
        	<li>Study PHP</li>
        	<li>Study HTML</li>
        	<li>Study PHP some more</li>
        	<li>Master PHP</li>
        </ul>

       <h1>Add to your TODO list</h1>

<?php

$todo = array('Study PHP',
              'Study HTML',
              'Study PHP some more',
              'Master PHP');

?>


</form>
		
<form method="POST" action="">
    
    <p>
        <label for="add">Add item:</label>
        <input id="add" name="add" type="text" placeholder = "Type in item">
    </p>
