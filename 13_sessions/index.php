<?php 
// sessions are stored on the server 
// so they are more secured


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <h1>Enter Your Details</h1>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>

   
</body>
</html>
