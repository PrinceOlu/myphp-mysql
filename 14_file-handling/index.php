<?php 
echo "File handling "
/*


1) Creating and Opening Files

Use the fopen() function to create or open a file.
Modes for fopen():
'r': Read-only, starts at the beginning of the file.
'w': Write-only, truncates the file or creates it if it doesn't exist.
'a': Write-only, appends data to the file or creates it if it doesn't exist.
'x': Write-only, creates a new file and returns FALSE if the file already exists.

2) Reading Files
Functions like fread() and fgets() can read data from a file.
file_get_contents() reads the entire file into a string.

3) Writing Files
Use fwrite() or file_put_contents() to write data to a file.

4) Appending Files
Open a file in append mode ('a') and use fwrite() to add data to the end of the file.

5) Closing Files
After operations, use fclose() to close the file and free resources.

6) Deleting Files
Use unlink() to delete a file.



*/

?>