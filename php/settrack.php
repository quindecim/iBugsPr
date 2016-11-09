<?php 
	require 'startsess.php';
	require 'connectdb.php';

	$query = "UPDATE tracking SET (track_status, track_flow) = ('Pending', 0)";
	$res = pg_query($dbconn, $query);
	if(!$res) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		exit();
	}

?>