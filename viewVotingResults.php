<?php
//Run the Python code to get the Question of The Day from C++
$question = trim(shell_exec("py getVotes.py"));

//Displaying the Questionon the website
if(!empty($question)){
	list($questionText, $optionA, $optionB, $votesA, $votesB) = explode(",", trim($question));
}
else{
	$questionText = "ERROR";
    $optionA = "ERROR";
    $optionB = "ERROR";
    $votesA = "Error";
    $votesB = "Error";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Voting Results For Question of The Day:</title>
        <link rel = "stylesheet" href = "question.css">
</head>
<body>
	<h1>Voting Results For Question Of The Day</h1>

	<!-- Displaying Question and voting Resulrs -->
	<p class="box"> <?php echo htmlspecialchars($questionText); ?></p>
	<p class="box"> <?php echo htmlspecialchars("A) " . $optionA . " - " . $votesA); ?></p>
	<p class="box"> <?php echo htmlspecialchars("B) " . $optionB . " - " . $votesB); ?></p>
	<a href="home.php">Option Menu</a>
</body>
</html>