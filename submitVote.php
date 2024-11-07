<?php

session_start();

//Getting users vote from the submitted form (from questionOfTheDay.php)
$vote = $_POST['vote'];

//Getting users username
$username = $_SESSION['username'];

$filename = "questions.txt";

//Updating vote by calling the C++ program using th Python code
$output = shell_exec("py updateVote.py $filename $vote $username");

//Confirm vote was received
echo htmlspecialchars("Thank You For Voting!");

$_SESSION['voted'] = "true";

//Redirect user to home.php (Option Menue screen)
header("Location: home.php");
exit();
?>