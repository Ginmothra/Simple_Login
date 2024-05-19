<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- php start -->
    <?php
    include_once ('database.php');

    // register proses start
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $insert = $db->query("INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')");
    };
    // register proses end
    ?>
    <!-- php end -->
    <div class="container-login">
        <h2>Login Form</h2>
        <form method="post" action="login_process.php">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button>Login</button>
            <p align="center">Don't have account? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>