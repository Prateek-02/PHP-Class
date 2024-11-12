<!DOCTYPE html>
<html>
<head>
    <title>Form Submitted</title>
</head>
<body>
    <h2>Thank you for submitting your information!</h2>
    <p><strong>Name:</strong> <?php echo $_REQUEST['name']; ?></p>
    <p><strong>Email:</strong> <?php echo $_REQUEST['password']; ?></p>
    <p><strong>Phone:</strong> <?php echo $_REQUEST['number']; ?></p>
    <p><strong>Address:</strong> <?php echo $_REQUEST['add']; ?></p>
</body>
</html>