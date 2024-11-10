<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Storing the submitted username (used to access the users profile info and previous voted results)
    $_SESSION['searchedUser'] = $_POST['name'];
    $user = $_SESSION['searchedUser'];
    $profile = validateUser($user);

    //Getting the Profile info
    if(!empty($profile)){
        list($username, $password, $age, $gender, $voted, $voteChoice) = explode(" ", trim($profile));
    }
    else{
        $username = "NOT FOUND";
        $age = "NOT FOUND";
        $gender = "NOT FOUND";
        $voted = "NOT FOUND";
        $voteChoice = "NOT FOUND";
    }
}

function validateUser($user){
    $file = 'USERS.txt';

     if (!file_exists($file)) {
        die("User data file not found.");
    }
    $user = escapeshellarg($user);
    $profile = trim(shell_exec("py viewProfile.py $user"));
    
    return $profile;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Viewing Profile</title>
    <link rel = "stylesheet" href = "profile.css">
</head>
<body>
    <h1>Viewing <?php echo htmlspecialchars($username);?> Profile</h1>

    <!-- Displaying Question and voting Resulrs -->
    <p>Username: <?php echo htmlspecialchars($username); ?></p>
    <p>Age: <?php echo htmlspecialchars($age); ?></p>
    <p>Gender: <?php echo htmlspecialchars($gender); ?></p>
    <p>Voted Today: <?php echo htmlspecialchars($voted); ?></p>
    <p>Voted For Option: <?php echo htmlspecialchars($voteChoice); ?></p>
    <a href="previousVotes.php">Previous Votes</a> <!-- Currently shows the current users prev votes rather than searched user -->
    <a href="home.php">Option Menu</a>
</body>

</html>