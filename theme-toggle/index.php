<?php
// Set default theme to 'light' if no cookie is found
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';

// Toggle theme if the user submits a new preference
if (isset($_POST['toggle_theme'])) {
    $theme = $theme === 'light' ? 'dark' : 'light';

    // Save the user's preference in a cookie (expires in 30 days)
    setcookie('theme', $theme, time() + (86400 * 30), '/');

    // Reload the page to apply the new theme
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Toggle with PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?= $theme ?>">
    <div class="container">
        <h1><?= ucfirst($theme) ?> Mode</h1>
        <form method="POST">
            <button type="submit" name="toggle_theme">
                Switch to <?= $theme === 'light' ? 'Dark' : 'Light' ?> Mode
            </button>
        </form>
    </div>
</body>
</html>
