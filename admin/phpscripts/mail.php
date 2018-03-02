<?php

//Collects all of our files together
  function submitMessage($email, $username, $password){
    $to = $email;
    $subj = "New User Info";
    $msg =
    "\n\nUsername:". $username.
    "\n\nPassword:". $password;
    "\n\nLogin Here: http://localhost/wood_j_3014_r1/admin/admin_login.php";
    // mail($to, $subj, $msg);

    echo "<h3 id=\"messageBack\">Your User Has Been Created!</h3>";

    }
 ?>
