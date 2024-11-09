<?php
session_start();

//Check if user is logged in
if (!isset($_SESSION['username'])){
    //Redirect user to login screen
    header('Location: login.php');
    exit();
}

//Get current users Username
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="login" content="provide username and password">
    <title>Submit Question</title>
    <link rel = "stylesheet" href = "login.css">
</head>
<body>
    <div class="loginBox">
        <h1>Question Submition Form</h1>
        <form action= "submitQuestion.php" method="post">
            <label for="name">Question:</label>
            <input type="text" id="question" name="question" required><br>
            <label for="name">Option A:</label>
            <input type="text" id="optionA" name="optionA" required><br>
            <label for="name">Option B:</label>
            <input type="text" id="optionB" name="optionB" required><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>