<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Document</title>
</head>
<body>
    <h1>Upload Your Document</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="fileUpload">Choose a file to upload (max: 5MB):</label><br><br>
        <input type="file" id="fileUpload" name="fileUpload" accept=".jpg,.jpeg,.png,.pdf" required>
        <p><small>Allowed file types: .jpg, .jpeg, .png, .pdf</small></p>
        <br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
