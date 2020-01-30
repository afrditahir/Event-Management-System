<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="">
	</head>
	<body>
		<!-- REGISTRATION(php) code from page-1 -->
		<?php
		// get values from user input from login.php
		$username = $_POST['user'];
		$userpassword = $_POST['pass'];
		// to prevent mysqql injection
		$username = stripcslashes($username);
		$userpassword = stripcslashes($userpassword);
		$username = mysql_real_escape_string($username);
		$userpassword = mysql_real_escape_string($userpassword);
		// connect the database and server
		mysql_connect("localhost", "root","");
		mysql_select_db("eventmanagementsys");
		// insert Query into Database for User
		$result = mysql_query("INSERT into userTable (username, password) values('$username','$userpassword')")  or die("Failed to query Database" .mysql_error());
		echo "Data has been inserted";
		?>
		<!-- LOGIN backend(php) on Dashboard   page-3 -->
		<div class="frm">
			<form method="POST" action="dashboard.php">
				<p>
					<label>UserName</label>
					<input type="text" name="user" id="user">
				</p>
				<p>
					<label>Password</label>
					<input type="Password" name="pass" id="pass">
				</p>
				<p>
					<input type="submit" id="btn" value="Login">
				</p>
			</form>
		</div>
	</body>
</html>