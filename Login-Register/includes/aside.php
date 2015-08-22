<aside>
	<?php 
	
		if (is_logged_in()){
			include 'includes/widgets/logged_in.php';
		} else{
			include 'includes/widgets/login.php';
		}
		
	?>
</aside>