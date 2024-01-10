<?php

// Get the text from the user.
$text = $_POST['text'];

// Create a new file.
$file = fopen('palavras.txt', 'w');

// Write the text to the file.
fwrite($file, $text);

// Close the file.
fclose($file);

?>