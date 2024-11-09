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

//get the contents from the submition form
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $question = $_POST['question'];
    $optionA = $_POST['optionA'];
    $optionB = $_POST['optionB'];

    //Write the submitted question and options to the file and add the users username for refrence 
    $filename = 'submittedQuestions.txt';
    $outfile = fopen($filename, "a");
    fwrite($outfile, $question . "," . $optionA . "," . $optionB . "," . $username . "\n");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Question Submitted</title>
    <link rel = "stylesheet" href = "question.css">
</head>
<body>
    <h1>Question Submitted</h1>
    <p> Thank you for submitting a question, it will be reviewed and we will notify you if added!</p>
    <!-- Displaying Submitted Question and Options -->
    <p> Question: <?php echo htmlspecialchars($question); ?></p>
    <p> A) <?php echo htmlspecialchars($optionA); ?></p>
    <p> B) <?php echo htmlspecialchars($optionB); ?></p>
    <a href="home.php">Option Menu</a>
</body>
</html>