<?php
$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredUsername = $_POST['username'];

    setcookie('username', $enteredUsername, time() + (86400 * 30), '/');

    $password = $_POST['password'];
    if ($enteredUsername === 'admin' && $password === 'password') {
        echo "<p>Login successful! Welcome, $enteredUsername.</p>";
    } else {
        echo "<p>Invalid credentials, please try again.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form with Remembered Username</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="">
            <input 
                type="text" 
                name="username" 
                placeholder="Enter Username" 
                value="<?= htmlspecialchars($username) ?>" 
                required
            />
            <input 
                type="password" 
                name="password" 
                placeholder="Enter Password" 
                required 
            />
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
