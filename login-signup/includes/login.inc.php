<?php

if(isset($_POST['submit'])){

	require 'dbh.inc.php';

	$mailuid = $_POST['email'];
	$pwd = $_POST['password'];

	if (empty($mailuid || empty($password))) {
		header("Location: ../index.php?error=emptyfield");
		exit();
	}
	else{
		$sql = "SELECT * FROM users WHERE username=? OR email=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../index.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$results = mysqli_stmt_get_result($stmt);

			if ($row = mysqli_fetch_assoc($results)) {
				$pwdcheck = password_verify($pwd, $row['pwd']);

				if ($pwdcheck==false) {
					header("Location: ../index.php?error=invalidpassword&email=".$mailuid);
					exit();
				}

				else{
					session_start();
					$_SESSION['username'] = $row['username'];
					$_SESSION['user_id'] = $row['user_id'];
					header("Location: ../index.php?login=success");
					exit();

				}

			}

			else{
				header("Location: ../index.php?error=nouserfound");
			}
		}
	}
}

else{
	header("Location: ../index.php");
	exit();
}