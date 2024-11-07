<!DOCTYPE html>
<html lan='en'>
<head>
	<meta charset="UTF-8">
	<meta name = "Create Account" content="Username, Password, Age, Gender">
	<title>Regester</title>
        <link rel="stylesheet" href="login.css">
</head>
<body>
	<div class = "registerBox">
		<h1>Create Your Profile</h1>

		<?php
		//If username was taken, display error message to user
		session_start();
		if (isset($_SESSION['error'])) {
	    	echo "<p style='color:red'>" . $_SESSION['error'] . "</p>";
	    	unset($_SESSION['error']); // Clear the error message
		}
		?>

		<form action="submitRegestration.php" method="post">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required><br>

			<label for="password">Password:</label>
			<input type="text" id="password" name="password" required><br>

			<label for="age">Age:</label>
			<input type="number" id="age" name="age" required><br>

			<label for="gender">Gender:</label>
			<select id="gender" name="gender" required>
				<option value="male">Male</option>
				<option value="female">Female</option>
				<option value="other">Other</option>
			</select><br>

			<input type="submit" value="Register">
		</form>
	</div>
</body>
</html>