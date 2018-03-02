<?php
	// ini_set('display_errors',1);
	// error_reporting(E_ALL);

	require_once('phpscripts/config.php');
	confirm_logged_in();
	if(isset($_POST['submit'])){

		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$level = $_POST['level'];
		if(empty($level)){
			$message = "Please select a user level.";
		}else{
			$result = createUser($fname, $username, $password, $email, $level);
			$message = $result;

			$sendMail = submitMessage($email, $username, $password);
		}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/app.css">
<title>Create User</title>
</head>
<body>

<div class="create">
	<form action="admin_createuser.php" method="post">
		<h1>Create User</h1>
	<label>First Name</label>
		<input type="text" name="fname" value=""><br><br>
	<label>Username:</label>
	<input type="text" name="username" value=""><br><br>
	<label>Password</label>
	<input type="password" name="password" value=""><br><br>
	<label>Email:</label>
	<input type="text" name="email" value=""><br><br>
		<select name="level">
			<option value="">Select User Level</option>
			<option value="2">Web Admin</option>
			<option value="1">Master Admin</option>
		</select><br><br>
		<input type="submit" name="submit" value="Create User">
	</form>
</div>

</body>
</html>
