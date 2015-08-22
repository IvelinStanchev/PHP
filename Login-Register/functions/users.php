<?php

	function change_profile_image($user_id, $file_temp_location, $file_extension){
		$file_path = 'images/profile/' . substr(md5(time()), 0, 10) . '.' . $file_extension;
		move_uploaded_file($file_temp_location, $file_path);
		
  		mysql_query("UPDATE `users` SET `profile` = '" . mysql_real_escape_string($file_path) . "' WHERE `user_id` = " . (int)$user_id);
	}

	function update_user($update_data){
		global $session_user_id;
		$update = array();
		
		array_walk($update_data, 'array_sanitize');
		
		foreach ($update_data as $field => $data) {
			$update[] = '`' . $field . '` = \'' . $data . '\'';
			
			mysql_query("UPDATE `users` SET " . implode(', ', $update) . " WHERE `user_id` = $session_user_id");
		}
	}

	function register_user($register_data){
		array_walk($register_data, 'array_sanitize');
		
		$register_data['password'] = md5($register_data['password']);
		
		$fields = '`' . implode('`, `', array_keys($register_data)) . '`';
		
		$data = '\'' . implode('\', \'', $register_data) . '\'';
		
		mysql_query("INSERT INTO `users` ($fields) VALUES ($data)");
	}

	function email_exists($email){
		$email = sanitize($email);
			
		return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email` = '$email'"), 0) == 1) ? true : false;
	}

	function get_user_data($user_id){
		$data = array();
		
		$user_id = (int)$user_id;
		
		$func_num_args = func_num_args();
		$func_get_args = func_get_args();
		
		if ($func_num_args > 1) {
			unset($func_get_args[0]);
			
			$fields = "`" . implode('`, `', $func_get_args) . "`";
			$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `users` WHERE `user_id` = $user_id"));
			
			return $data;
		}
	}

	function is_logged_in(){
		return (isset($_SESSION['user_id'])) ? true : false;
	}

	function login($username, $password){
		$user_id = user_id_from_username($username);
		
		$username = sanitize($username);
		$password = md5($password);
		
		return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `password` = '$password'"), 0) == 1) ? $user_id : false;
	} 

	function user_id_from_username($username){
		$username = sanitize($username);
		
		return mysql_result(mysql_query("SELECT `user_id` FROM `users` WHERE `username` = '$username'"), 0);
	}

	function user_exists($username){
 		$username = sanitize($username);
 		
 		return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username'"), 0) == 1) ? true : false;
	}

?>