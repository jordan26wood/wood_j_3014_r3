<?php

//Users new account deletes if user has been away fro greater than 73 hours
		// $tooktolong = "DELETE FROM tbl_user WHERE user_id = SELECT NOW() + HOUR(72);";
		// $deleteUser = mysqli_query($link, $tooktolong);


function createUser($fname, $username, $password, $email, $level) {
		include('connect.php');
		$date = "NULL";
		$password = md5($password);
$userstring = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$username}', '{$password}', '{$email}', '{$date}', '{$level}', 'no',  NULL, 'new')";

    $userquery = mysqli_query($link, $userstring);
    if ($userquery) {
      redirect_to('admin_index.php');
    }else{
      $message = "User was not able to be created, Please try again.";
      return $message;
    }
		mysqli_close($link);
	}

		function editUser($id, $fname, $username, $password, $email)
		{
			include('connect.php');

			$updatestring = "UPDATE tbl_user SET user_fname = '{$fname}', user_name = '{$username}', user_pass = '{$password}', user_email = '{$email}', user_newlogin = 'old' WHERE user_id = {$id}";

			$updatequery = mysqli_query($link, $updatestring);

			if($updatequery){
				redirect_to("admin_index.php");
			}else{
				$message = "Guess you got canned...";
				return $message;
			}

			mysqli_close($link);
		}


		function deleteUser($id){
			include('connect.php');
		$delstring = "DELETE FROM tbl_user WHERE user_id = {$id}";
		$delquery = mysqli_query($link, $delstring);
		if($delquery){
			redirect_to("../admin_index.php");
		}else{
			$message = "Bye, Bye..";
			return $message;
		}

			mysqli_close($link);
		}
?>
