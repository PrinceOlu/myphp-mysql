<?php
// Directory to store uploaded files
$uploadDirectory = "uploads/";

// Create the directory if it doesn't exist
if (!is_dir($uploadDirectory)) {
    mkdir($uploadDirectory, 0777, true);
}

// Check if a file has been uploaded
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fileUpload'])) {
    $file = $_FILES['fileUpload'];

    // Extract file information
    $fileName = basename($file['name']);
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];

    // Define allowed file extensions
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf'];

    // Get file extension
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Validate the file
    if ($fileError === 0) {
        if (in_array($fileExtension, $allowedExtensions)) {
            if ($fileSize <= 5 * 1024 * 1024) { // Limit file size to 5MB
                $newFileName = uniqid('file_', true) . "." . $fileExtension;
                $fileDestination = $uploadDirectory . $newFileName;

                // Move the file to the upload directory
                if (move_uploaded_file($fileTmpName, $fileDestination)) {
                    echo "File uploaded successfully! Saved as: " . htmlspecialchars($newFileName);
                } else {
                    echo "Error moving the uploaded file.";
                }
            } else {
                echo "File size exceeds the 5MB limit.";
            }
        } else {
            echo "Invalid file type. Allowed types are: " . implode(', ', $allowedExtensions);
        }
    } else {
        echo "Error during file upload. Error code: $fileError";
    }
} else {
    echo "No file uploaded.";
}
?>
