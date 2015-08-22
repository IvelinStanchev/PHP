<?php

	function protect_page(){
		if (!is_logged_in()) {
			header("Location: index.php");
		}
	}

	function array_sanitize(&$item){
		$item = mysql_real_escape_string($item);
	}

	function output_errors($errors){
		return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
	}

	function sanitize($data){
		return mysql_real_escape_string($data);
	}

?>