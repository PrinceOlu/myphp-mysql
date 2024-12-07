<?php

/*
1) Creating and Opening Files

Use the fopen() function to create or open a file.
Modes for fopen():
'r': Read-only, starts at the beginning of the file.
'w': Write-only, truncates the file or creates it if it doesn't exist.
'a': Write-only, appends data to the file or creates it if it doesn't exist.
'x': Write-only, creates a new file and returns FALSE if the file already exists.

*/

// Open file in read-only mode
$file = fopen("users.txt", "r"); // Open file for reading

if ($file) {
    $fileSize = filesize("users.txt"); // Ensure you calculate the size of the correct file

    if ($fileSize > 0) {
        $content = fread($file, $fileSize); // Read file content
        echo $content;
    } else {
        echo "Error: The file is empty.";
    }

    fclose($file); // Close the file
} else {
    echo "Error: Unable to open the file.";
}


?>
