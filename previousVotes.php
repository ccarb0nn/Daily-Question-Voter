<?php
session_start();

//Checking if request is coming from submitSearch (if so use that username rather than the current users username)
if(isset($_SESSION['searchedUser'])){
    $username = $_SESSION['searchedUser'];
    unset($_SESSION['searchedUser']);
}
//Checking if user is logged in
else if(isset($_SESSION['username'])){
    //Getting username based on login saved info 
    $username = $_SESSION['username'];
}
else{
    //User is not logged in, prompt them to login (Error)
    header("Location: login.php");
    exit();
}

//Getting (or creating) users personal text file which stores all their previous votes 
$filename = $username . ".txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES);

    //Store the questions and options
    $questions = [];

    foreach($lines as $line){
        list($question, $option) = explode(",", trim($line));
        $questions[] = ['question' => $question, 'option' => $option];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Previous Voting Choices</title>
        <link rel = "stylesheet" href = "question.css">
</head>
<body>
    <h1>Previous Voting Choices</h1>

    <!-- Displaying Question and voting Results -->
    <?php foreach($questions as $q): ?>
        <p class="box"> 
            <?php echo htmlspecialchars($q['question']); ?> <br><br> 
            [ Voted: <?php echo htmlspecialchars($q['option']); ?> ]
        </p>
    <?php endforeach; ?>
    <a href="home.php">Option Menue</a>
</body>
</html>