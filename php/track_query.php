<?php 
	require 'connectdb.php';
	require 'dummy.php';

	// $r1 = pg_query($dbconn, 'INSERT INTO tracking VALUES (201610, 10, 1, 'In Progress')');
	// if(!$r1) {
 //      $errormessage = pg_last_error();
 //      echo "Error with query: ". $errormessage;
 //      exit();
 //    }

	$q = 'SELECT * FROM tracking WHERE track_prnum1 = ' . $_SESSION['pr1'] . ' AND track_prnum2 = ' . $_SESSION['pr2'];
	$r = pg_query($dbconn, $q);
	if(!$r) {
		$errormessage = pg_last_error();
		echo "Error with query 1: ". $errormessage;
		exit();
	}else {
		echo ' ' . 'yo';
		$row = pg_fetch_array($r, 0);
		$_SESSION['curr_ofc'] = $row[1];
		$_SESSION['curr_stat'] = $row[3];
	}

?>