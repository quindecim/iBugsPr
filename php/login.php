<?php
	require 'startsess.php';
	require 'connectdb.php';

	$usr = strtolower($_POST['uname']);
	$ps = strtolower($_POST['pass']);

	if($usr != $ps) {
		header('Location: ../signin.php');
	}

	$res = pg_query($dbconn, "SELECT user_number FROM users WHERE user_name = '$usr' AND user_password = '$ps'");
	if(!$res) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		exit();
	}
	$row = pg_num_rows($res);
	if($row > 0) {
		$_SESSION['user'] =pg_fetch_result($res, 0, 'user_number');
	}else {
		header('Location: ../signin.php');
	}
	header('Location: dummy.php');

?>