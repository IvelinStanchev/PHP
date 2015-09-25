<?php
	function deleteToDo($id){
		global $db;
		
		$sql = "DELETE FROM `todos` WHERE `id` = '$id'";
		$db->query($sql);
	}

	function insertToDo($text){
		global $db;
		
		$sql = "INSERT INTO `todos` (`text`) VALUES ('$text')";
		$db->query($sql);
	}
?>