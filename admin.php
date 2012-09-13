<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
	<head>
		<style>
			html
			{
				background-color: #00CCCC; 	
			}
			.greeting
			{
				text-align: center;
				font-size: 25px;
				font-weight: bold;		
			}
			
		</style>
	</head>
	<title>Admin</title>
	<?php
		if(!isset($_POST['login']) && !isset($_POST['password']))
		{
			echo '<div class="greeting">Please Login </div></br>';
			echo '<form class="greeting" method="post" action="admin.php">
				Login: <input type="text" name="login" /><br />
				Password: <input type="text" name="password" /> </br>
				<input type="submit" value="submit" name="submit">'; 
		}
		else
		{
			//Here you will handle if they had entered anything	
		}
	?>
</html>