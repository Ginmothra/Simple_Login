<!DOCTYPE html>
<html>
<head>
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container-register">
        <h2>Register Form</h2>
        <form method="post" action="index.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Register</button>
            <p align="center">Have account? <a href="index.php">Login</a></p>
        </form>
    </div>
</body>
</html>