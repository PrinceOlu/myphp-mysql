<?php
$file = fopen("example.txt", "w"); // Open file for writing
fwrite($file, "Hello, World!");    // Write data to the file
echo "File written successfully...";
fclose($file);                     // Close the file
?>
