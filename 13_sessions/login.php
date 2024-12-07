<?php
// Start the session
session_start();

// POST SUPERGLOBAL Example
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Convert special characters to HTML entities
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Check if the credentials are correct
    if($username == 'Prince' && $password == '1234'){
        // Store username in session
        $_SESSION['username'] = $username;
        
        // Redirect to dashboard.php
        header('location: dashboard.php');
        exit(); // Always call exit after header redirection to stop further script execution
    } else {
        // If credentials are incorrect
        echo "Wrong credentials...";
    }
}
?>
