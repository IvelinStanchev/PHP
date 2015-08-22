<?php

	include 'init.php';
	protect_page();
	include 'includes/overall/header.php';
	
	if (!empty($_POST)) {
		$required_fields = array('first_name', 'email');
		
		foreach ($_POST as $key => $value) {
			if (empty($value) && in_array($key, $required_fields)) {
				$errors[] = "Fields marked with * are required";
				break;
			}
		}
		
		if (empty($errors)) {
			if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$errors[] = "A valid email is required!";
			} else if (email_exists($_POST['email']) && $user_data['email'] !== $_POST['email']){
				$errors[] = "The email " . $_POST['email'] . " already exists!";
			}
		}
	}
	
?>
	<h1>Settings</h1>
	
	<?php 
		if (isset($_GET['success']) && empty($_GET['success'])) {
			echo "You have successfully updated your settings!";
		} else {
	
			if (!empty($_POST) && empty($errors)) {
				$update_data = array(
						'first_name' => $_POST['first_name'],
						'last_name' => $_POST['last_name'],
						'email' => $_POST['email']
				);
				
				update_user($update_data);
				header("Location: settings.php?success");
				exit();
			}
			else if (!empty($errors)){
				echo output_errors($errors);
			}
		
		?>
		<form action="" method="post">
			<ul>
				<li>
					First name*:<br/>
					<input type="text" name="first_name" value="<?php echo $user_data['first_name']; ?>">
				</li>
				<li>
					Last name:<br/>
					<input type="text" name="last_name" value="<?php echo $user_data['last_name']; ?>">
				</li>
				<li>
					Email*:<br/>
					<input type="text" name="email" value="<?php echo $user_data['email']; ?>">
				</li>
				<li>
					<input type="submit" value="Update">
				</li>
			</ul>
		</form>
	<?php
	}
	include 'includes/overall/footer.php';

?>