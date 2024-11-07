<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = htmlspecialchars(trim($_POST['username']));
	$password = htmlspecialchars(trim($_POST['password']));
	$age = htmlspecialchars(trim($_POST['age']));
	$gender = htmlspecialchars(trim($_POST['gender']));
	$voted = htmlspecialchars(trim("false"));

	//Check if provided username is not taken
	function validateUsername($username){
		$file = 'USERS.txt';

		if (!file_exists($file)) {
			echo("User data file not found...");
			return false;
	 	}
	 	else{
	 		//Run the Python code to compile the C++ program to verify that the Username is not taken
			$result = trim(shell_exec("py verifyUsername.py $file $username"));

			//Username taken
			if($result === "taken"){
				return false;
			}
			//Username NOT taken
			else{
				return true;
			}
		}
	}
	 	

	function saveUsersToFile($username, $password, $age, $gender, $voted){
		$file = 'USERS.txt';
		$userInfo = "$username $password $age $gender $voted" . PHP_EOL;
		file_put_contents($file, $userInfo, FILE_APPEND);
	}	

	$status = validateUsername($username);

	//If user name is not taken, save user info and prompt them to login
	if($status){
		saveUsersToFile($username, $password, $age, $gender, $voted);
		$_SESSION['username'] = $username;
		header('Location: login.php');
		exit();
	}
	//If username is taken, display USERNAME TAKEN message on the php/html screen and redirect prompt them to register again
	else{
		$_SESSION['error'] = "Username: $username is taken, please choose a different username...";
		header('Location: register.php');
		exit();
	}
}
?>