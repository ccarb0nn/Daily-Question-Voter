<?php
session_start();

//Checking if user is logged in
if(isset($_SESSION['username'])){
    //Getting username based on login saved info 
    $username = $_SESSION['username'];

    //Run the Python code to get the Profile info from C++
    $profile = trim(shell_exec("py viewProfile.py $username"));

    //Displaying the Profile infovto the website
    if(!empty($profile)){
        list($username, $password, $age, $gender, $voted) = explode(" ", trim($profile));
    }
    else{
        $username = "ERROR";
        $age = "ERROR";
        $gender = "ERROR";
        $voted = "ERROR";
    }
}
else{
    //User is not logged in, prompt them to login (Error)
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Viewing Profile</title>
    <link rel = "stylesheet" href = "profile.css">
</head>
<body>
    <h1>Viewing <?php echo htmlspecialchars($username);?> Profile:</h1>

    <!-- Displaying Question and voting Resulrs -->
    <p>Username: <?php echo htmlspecialchars($username); ?></p>
    <p>Age: <?php echo htmlspecialchars($age); ?></p>
    <p>Gender: <?php echo htmlspecialchars($gender); ?></p>
    <p>Voted Today: <?php echo htmlspecialchars($voted); ?></p>
    <a href="home.php">Option Menu</a>
</body>

</html>