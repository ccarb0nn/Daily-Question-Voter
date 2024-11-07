<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="login" content="provide username and password">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div clas = "loginBox">
    <h1>Login</h1>
        <?php
        //If username was taken, display error message to user
        session_start();
        if (isset($_SESSION['loginError'])) {
            echo "<p style='color:red'>" . $_SESSION['loginError'] . "</p>";
            unset($_SESSION['loginError']); // Clear the error message
        }
        ?>

        <form action= "submitLogin.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>