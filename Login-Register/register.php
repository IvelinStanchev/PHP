<?php 
	include 'init.php';
	include 'includes/overall/header.php';
	
	if (!empty($_POST)) {
		$required_fields = array('username', 'password', 'repeat_password', 'first_name', 'email');
		
		foreach ($_POST as $key => $value) {
			if (empty($value) && in_array($key, $required_fields)) {
				$errors[] = "Fields marked with * are required";
				break;
			}
		}
		
		if (empty($errors)) {
			if (user_exists($_POST['username'])) {
				$errors[] = "Sorry, the username '" . htmlentities($_POST['username']) . "' already exists!";
			}
			
			if (preg_match("/\\s/", $_POST['username'])) {
				$errors[] = "The username should not contain any spaces!";
			}
			
			if (strlen($_POST['username']) < 5 || strlen($_POST['username']) > 32) {
				$errors[] = "The username length should be between 5 and 32 characters!";
			}
			
			if (strlen($_POST['password']) < 5 || strlen($_POST['password']) > 32) {
				$errors[] = "The password length should be between 5 and 32 characters!";
			}
			
			if ($_POST['password'] !== $_POST['repeat_password']) {
				$errors[] = "The passwords do not match!";
			}
			
			if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
				$errors[] = "A valid email is required!";
			}
			
			if (email_exists($_POST['email'])) {
				$errors[] = "The email " . $_POST['email'] . " already exists!";
			}
		}
	}
?>
	
	<h1>Register</h1>
	
	<?php 
	
		if (isset($_GET['success']) && empty($_GET['success'])) {
			echo "You have been registered successfully!";
		}
		else{
			if (!empty($_POST) && empty($errors)) {
				$register_data = array(
						'username' => $_POST['username'],
						'password' => $_POST['password'],
						'first_name' => $_POST['first_name'],
						'last_name' => $_POST['last_name'],
						'email' => $_POST['email']
				);
				
				register_user($register_data);
				
				header("Location: register.php?success");
				
				exit();
			}
			else if(!empty($errors)) {
				echo output_errors($errors);
			}
	
	?>
	
	<form action="" method="post">
		<ul>
			<li>
				Username*:</br>
				<input type="text" name="username">
			</li>
			<li>
				Password*:</br>
				<input type="password" name="password">
			</li>
			<li>
				Repeat Password*:</br>
				<input type="password" name="repeat_password">
			</li>
			<li>
				First Name*:</br>
				<input type="text" name="first_name">
			</li>
			<li>
				Last Name:</br>
				<input type="text" name="last_name">
			</li>
			<li>
				Email*:</br>
				<input type="text" name="email">
			</li>
			<li>
				<input type="submit" value="Register">
			</li>
		</ul>
	</form>
	
<?php
		}
	include 'includes/overall/footer.php';
?>


