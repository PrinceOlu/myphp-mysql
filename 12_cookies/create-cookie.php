<?php 
// stored on the client, no sensitive data should be 
// saved in the cookies because it is not safe.


// Set a cookie with the name 'name' and the value 'Prince'.
// The cookie will expire in 1 day (86400 seconds).
setcookie('name', 'Ade', time() + 86400); // time() + 86400 = current time + 1 day
?>