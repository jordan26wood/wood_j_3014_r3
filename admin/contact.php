<?php

require_once("phpscripts/config.php");
  if(isset($_POST['submit'])){
        // echo "Good for you, you can click a button";
        $fname = trim($_POST['fname']);
    		$username = trim($_POST['username']);
    		$password = trim($_POST['password']);
    		$email = trim($_POST['email']);
    		$level = $_POST['level'];

        $sendMail = submitMessage($username, $password, $email, $level);
  }

?>
