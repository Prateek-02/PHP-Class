<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email and URL Validation Form</title>
</head>
<body>
    <h2>Email and URL Validation Form</h2>

    <?php
    // Initialize variables
    $email = $url = "";
    $emailMessage = $urlMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // === Email Validation and Sanitization ===
        $rawEmail = $_POST['email'];
        $sanitizedEmail = filter_var($rawEmail, FILTER_SANITIZE_EMAIL);

        if (filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
            $emailMessage = "Valid email: $sanitizedEmail";
        } else {
            $emailMessage = "Invalid email format.";
        }

        // === URL Validation and Sanitization ===
        $rawUrl = $_POST['url'];
        $sanitizedUrl = filter_var($rawUrl, FILTER_SANITIZE_URL);

        if (filter_var($sanitizedUrl, FILTER_VALIDATE_URL)) {
            $urlMessage = "Valid URL: $sanitizedUrl";
        } else {
            $urlMessage = "Invalid URL format.";
        }
    }
    ?>

    <!-- Form to capture email and URL input -->
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Enter your email:</label>
        <input type="text" id="email" name="email" required><br><br>

        <label for="url">Enter a URL:</label>
        <input type="text" id="url" name="url" required><br><br>

        <button type="submit">Submit</button>
    </form>

    <!-- Display messages after submission -->
    <p><?php echo $emailMessage; ?></p>
    <p><?php echo $urlMessage; ?></p>

</body>
</html>
