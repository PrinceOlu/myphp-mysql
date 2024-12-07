<?php
// var_dump($_SERVER);
// put the result in a readable list

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SERVER Variables</title>
</head>
<body>
    <h1>$_SERVER Variables</h1>
    <ul>
        <li><strong>Host:</strong> <?php echo $_SERVER['HTTP_HOST']; ?></li>
        <li><strong>Server Name:</strong> <?php echo $_SERVER['SERVER_NAME']; ?></li>
        <li><strong>Request Method:</strong> <?php echo $_SERVER['REQUEST_METHOD']; ?></li>
        <li><strong>Server Protocol:</strong> <?php echo $_SERVER['SERVER_PROTOCOL']; ?></li>
        <li><strong>Document Root:</strong> <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
        <li><strong>Remote Address:</strong> <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
        <li><strong>Script Name:</strong> <?php echo $_SERVER['SCRIPT_NAME']; ?></li>
        <li><strong>Request URI:</strong> <?php echo $_SERVER['REQUEST_URI']; ?></li>
        <li><strong>Server Software:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
        <li><strong>Server Admin:</strong> <?php echo $_SERVER['SERVER_ADMIN']; ?></li>
    </ul>
</body>
</html>
