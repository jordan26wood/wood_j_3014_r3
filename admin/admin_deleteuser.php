<?php
	//init_set('display_errors',1);
	//error_reporting(E_ALL);

	require_once('phpscripts/config.php');
	// confirm_logged_in();
	$tbl = "tbl_user";
	$users = getAll($tbl);
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/app.css">
<title>Delete User</title>
</head>
<body>
	<div class="delete">
<h2>Time to destory some lives...</h2>

<p><?php
while($row = mysqli_fetch_array($users)){
	echo "{$row['user_fname']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Fired</a><br>";

} ?></p>

</div>
</body>
</html>
