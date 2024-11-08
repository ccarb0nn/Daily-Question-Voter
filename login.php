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

        //Get the current date (used to check if users voting status needs to be reset -> new day)
        $currentDate = date("Y-m-d");

        //Get yesterdays date from the file
        $lastResetDate = file_get_contents('lastResetDate.txt');

        if(trim($lastResetDate) !== $currentDate){
            //Update all users voting status to false
            $userInfo = file('USERS.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            $updateUserInfo = "";

            //Updating Voting status to false (new day) and setting vote choice to X (no choice has been made)
            foreach ($userInfo as $line){
                list($username, $password, $age, $gender, $votingStatus, $voteChoice) = explode(" ", $line);
                $votingStatus = "false";
                $voteChoice = "X";
                $updateUserInfo = "$username $password $age $gender $votingStatus $voteChoice";
            }
        
            //Run the Python code to get a random number which will represent the random Question of The Day from the C++ program
            $randomNumber = trim(shell_exec("py randomNumber.py"));
            //store the random value in the txt file
            file_put_contents('randomNumber.txt', $randomNumber);

            //update the USERS.txt file with the new voting status for all users
            file_put_contents('USERS.txt', $updateUserInfo);
            //Update new last reset date (current date)
            file_put_contents('lastResetDate.txt', $currentDate); 
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