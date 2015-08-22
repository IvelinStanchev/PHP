<div class="widget">
	<h2>Hello, <?php echo $user_data['first_name'];?>!</h2>
	<div class="inner">
		<div class="image-container">
			<?php
				global $session_user_id;
			
				if (isset($_FILES['profile'])) {
					if (empty($_FILES['profile']['name'])) {
						echo "Please, choose a file!";
					} else {
						$allowed_extensions = array('jpg', 'jpeg', 'gif', 'png');
						
						$file_name = $_FILES['profile']['name'];
						$file_extension = strtolower(end(explode('.', $file_name)));
						$file_temp_location = $_FILES['profile']['tmp_name'];
						
						if (in_array($file_extension, $allowed_extensions)) {
							$user_data['profile'] = "";
							change_profile_image($session_user_id, $file_temp_location, $file_extension);
						} else {
							echo "Incorrect file type! Allowed: ";
							echo implode(', ', $allowed_extensions);
						}
					}
				}
			
				if (empty($user_data['profile'])) {
					$user_data = get_user_data($session_user_id, 'user_id', 'username', 'password', 'first_name', 'last_name', 'email', 'profile');
				}
				
				if (!empty($user_data['profile'])) {
					echo '<img src="' . $user_data['profile'] . '" alt="' . $user_data['username'] . '\'s profile "';
				}
			?>
			
			
		</div>
		
		
		
	</div>
	<div class="profile">
		<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="profile" /> 
			<input type="submit" value="Upload" />
		</form>
	</div>
	<ul>
		<li>
			<a href="logout.php">Log out</a>
		</li>
		<li>
			<a href="settings.php">Settings</a>
		</li>
	</ul>
</div>