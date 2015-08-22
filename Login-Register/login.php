<?php

	include 'init.php';
	include 'includes/overall/header.php';
	
	if (!empty($_POST)){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if (empty($username) || empty($password)) {
			$errors[] = "You need to enter an username and password!"; 
		} 
		else if (!user_exists($username)) {
			$errors[] = "We can't find that username!";
		}
		else{
			if (strlen($username) > 32 || strlen($username) < 5) {
				$errors[] = "Username length should be between 5 and 32 characters!";
			}
			if (strlen($password) > 32 || strlen($password) < 5) {
				$errors[] = "Password length should be between 5 and 32 characters!";
			}
			
			$login = login($username, $password);
			
			if (!$login) {
				$errors[] = "Username/Password combination is wrong!";
			}
			else{
				$_SESSION['user_id'] = $login;
				header("Location: index.php");
				exit();
			}
			
		}
		
		if (!empty($errors)) {
			echo output_errors($errors);
		}
	}
	
	include 'includes/overall/footer.php';

?>