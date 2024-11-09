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
<html lang = 'en'>
<head>
	<meta charset = "UTF-8">
	<meta name="Option Menue" content="Profile, Question, Search, Add Question, Logout">
	<link rel = "stylesheet" href = "home.css">
</head>
<body>
	<h1> Welcome <?php echo htmlspecialchars($username); ?>!</h1>
	<ul>
		<li><a href="viewProfile.php">View Profile</a></li>
		<li><a href="questionOfTheDay.php">View Question of The Day</a></li>
		<li><a href="viewVotingResults.php">View Voting Results</a></li>
		<li><a href="searchUser.php">Search for User</a></li>
		<li><a href="questionSubmition.php">Submit Question</a></li>
		<li><a href="welcome.html">Logout</a></li>
	</ul>
</body>
</html>