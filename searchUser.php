<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="login" content="provide username and password">
    <title>Search For User</title>
    <link rel = "stylesheet" href = "login.css">
</head>
<body>
    <div class="loginBox">
        <h1>Search For User:</h1>
        <form action= "submitSearch.php" method="post">
            <label for="name">Username:</label>
            <input type="text" id="name" name="name" required><br>
            <input type="submit" value="Search">
        </form>
    </div>
</body>
</html>