<?php
session_start();
$username = $_SESSION['username'];

//Run the Python code to get the Question of The Day from C++
$question = trim(shell_exec("py question.py"));

//Displaying the Questionon the website
if(!empty($question)){
	list($questionText, $optionA, $optionB) = explode(",", trim($question));
}
else{
	$questionText = "ERROR";
    $optionA = "ERROR";
    $optionB = "ERROR";
}

//Run the Python code to get the Profile info from C++
$profile = trim(shell_exec("py viewProfile.py $username")); //Is this section needed?

//Displaying the Profile info to the website
if(!empty($profile)){
    list($username, $password, $age, $gender, $voted, $voteChoice) = explode(" ", trim($profile)); //Is this section needed?
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Question of The Day:</title>
	<link rel = "stylesheet" href = "question.css">
</head>
<body>
	<h1>Question Of The Day</h1>

	<?php if ($voted == "true"): ?>
		<p> Already Voted Today... Wait Till Tomorrow To Vote Again!</p>
		<a href="home.php">Option Menu</a>
	<?php else: ?>
		<!-- Displaying Question and voting Options -->
		<p> <?php echo htmlspecialchars($questionText); ?></p>
		<form action="submitVote.php" method="post">
			<div class="option-box">
				<input type="radio" id="A" name="vote" value="A">
				<label for="A"><?php echo htmlspecialchars($optionA); ?></label><br>
			</div>
			<div class="option-box">
				<input type="radio" id="B" name="vote" value="B">
				<label for="B"><?php echo htmlspecialchars($optionB); ?></label><br>
			</div>
			<input type="submit" value="Submit">
		</form>
	<?php endif; ?>
</body>
</html>