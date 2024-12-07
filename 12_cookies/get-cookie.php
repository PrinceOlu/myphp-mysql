<?php 
// Check if the cookie has been set
if (isset($_COOKIE['name'])) {
    echo "Cookie is set! Value: " . $_COOKIE['name'];
} else {
    echo "Cookie  is not set.";
}
?>