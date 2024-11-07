<?php
session_start();

function validateUser($username, $password){
	$file = 'USERS.txt';

	 if (!file_exists($file)) {
	 	die("User data file not found.");
    }

	$lines = file($file);

	foreach($lines as $line){
		list($storedUsername, $storedPassword) = explode(' ', trim($line));

		if($storedUsername === $username && $storedPassword === $password){
			return true;
		}
	}
	return false;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(validateUser($username, $password)){
		$_SESSION['username'] = $username;
		header('Location: home.php');
		exit();
	}
	else{
		$_SESSION['loginError'] = "The username or password you entered did not match...";
		header('Location: login.php');
		exit();
	}
}
?>