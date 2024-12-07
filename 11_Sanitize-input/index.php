<?php 
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Trim whitespace from input values
        $name = trim($_POST['name']);
        $age = trim($_POST['age']);

        // Strip HTML and PHP tags from input
        $name = strip_tags($name);
        $age = strip_tags($age);

        // Convert special characters to HTML entities
        $name = htmlspecialchars($name);
        $age = htmlspecialchars($age);

        // Remove any backslashes
        $name = stripslashes($name);
        $age = stripslashes($age);

        // Optionally filter input (e.g., for numbers only)
        $age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);

        // Final output
        echo "My name is " . $name . " and I am " . $age . " years old.";
    }
?>
