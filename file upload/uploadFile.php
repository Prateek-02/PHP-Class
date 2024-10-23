<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
</head>
<body>

<h2>Upload a File</h2>

<?php
$message = ""; // Initialize message variable

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "uploads/";  // Directory for file uploads
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);

    // Create the 'uploads' directory if it doesn't exist
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Move uploaded file to the 'uploads/' directory
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        $message = "File '" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "' has been uploaded successfully.";
    } else {
        $message = "Error: Unable to upload the file.";
    }
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"><br><br>
    
    <label for="age">Age:</label>
    <input type="number" name="age" id="age"><br><br>
    
    <label for="fileToUpload">Select a file to upload:</label>
    <input type="file" name="fileToUpload" id="fileToUpload" required><br><br>
    
    <button type="submit">Upload File</button>
</form>

<p><?php echo $message; ?></p>

</body>
</html>
