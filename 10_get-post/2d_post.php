<?php
// POST SUPERGLOBAL Example
if (isset($_POST['name']) && isset($_POST['age'])) {
    echo "My name is " . htmlspecialchars($_POST['name']) . " and I am " . htmlspecialchars($_POST['age']) . " years old.";
}
?>

