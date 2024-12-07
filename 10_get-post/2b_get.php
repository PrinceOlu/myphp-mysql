<?php
// GET SUPERGLOBAL Example
if (isset($_GET['name']) && isset($_GET['age'])) {
    echo "My name is " . htmlspecialchars($_GET['name']) . " and I am " . htmlspecialchars($_GET['age']) . " years old.";
}
?>

