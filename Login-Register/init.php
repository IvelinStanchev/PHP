<?php
	session_start();

	require 'database/connect.php';
	require 'functions/general.php';
	require 'functions/users.php';

	$current_file = end(explode("/", $_SERVER['SCRIPT_NAME']));
	
	if (is_logged_in()) {
		$session_user_id = $_SESSION['user_id'];
		$user_data = get_user_data($session_user_id, 'user_id', 'username', 'password', 'first_name', 'last_name', 'email', 'profile');
	}
	
	$errors = array();
?>