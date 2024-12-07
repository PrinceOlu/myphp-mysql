<?php
// Open file in write mode to create if it doesn't exist
$file = fopen("New-users.txt", "w"); 

if ($file) {
    echo "File created/opened successfully!";
    fclose($file); // Close the file
} else {
    echo "Error: Unable to create/open the file.";
}
?>
