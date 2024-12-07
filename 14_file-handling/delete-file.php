<?php
if (file_exists("New-users.txt")) {
    unlink("New-users.txt"); // Delete the file
    echo "File deleted.";
} else {
    echo "File does not exist.";
}
?>
