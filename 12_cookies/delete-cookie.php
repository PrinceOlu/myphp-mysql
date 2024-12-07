<?php 
// to delete a cookie
setcookie('name', '', time() - 86400); // time() + 86400 = current time + 1 day
?>