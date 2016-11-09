<?php
	require 'startsess.php';
	require 'connectdb.php';

	$q = "UPDATE tracking SET track_status = 'Declined' WHERE track_prnum1 = " . $_SESSION['pr1'] . " AND track_prnum2 = " . $_SESSION['pr2'];
	$r = pg_query($dbconn, $q);
	if(!$r) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		exit();
	}
	$_SESSION['flag'] = True;
	$_SESSION['ch'] = 'd';

	header('Location: ../track_tbl2.php');

?>