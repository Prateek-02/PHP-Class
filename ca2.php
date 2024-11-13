<?php
    $erremail = "";
    $email = "";
    $resetMessage = "";
    
    $validEmails = ["example1@example.com", "example2@example.com", "example3@example.com"];
    
    if (isset($_POST["reset"])) {
        
        if (empty($_POST['email'])) {
            $erremail = "Email is required";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $erremail = "Invalid email format";
        } else {
            $email = test_input($_POST['email']);

            if (in_array($email, $validEmails)) {
                $resetMessage = "A password reset link has been sent to your email.";
            } else {
                $resetMessage = "Email address does not exist in our records.";
            }
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .reset-form {
            background-color: #ffffff;
            padding: 20px;
            width: 300px;
            text-align: center;
        }
        .reset-form h2 {
            margin-bottom: 20px;
            color: #333333;
        }
        .reset-form input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #dddddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .reset-form button {
            width: 100%;
            padding: 10px;
            background-color: black;
            color: #ffffff;
        }
        .message {
            margin-top: 10px;
            font-size: 14px;
        }
        .error {
            color: #ff0000;
        }
        .success {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="reset-form">
        <h2>Password Reset</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <span class="error"><?php echo $erremail; ?></span><br><br>

            <button type="submit" name="reset">Reset Password</button>
        </form>

        <?php if (!empty($resetMessage)) { ?>
            <p class="message <?php echo $resetMessage == "Email address does not exist in our records." ? 'error' : 'success'; ?>">
                <?php echo $resetMessage; ?>
            </p>
        <?php } ?>
    </div>
</body>
</html>
