<?php
	// require 'connectdb.php';

	getprno() {
		$date = date("Y-m-d");
		$datearray = explode("-", $date);
		$prnum = $datearray[0].$datearray[1];
		$pr1 = intval($prnum);

		$result = pg_query($dbconn, "SELECT max(pr_number2) FROM purchase where pr_number1 = $pr1");
		if(!$result) {
			$errormessage = pg_last_error();
			echo "Error with query: ". $errormessage;
			exit();
		}else {
			$chkarr = pg_fetch_array($result);
			$max = intval($chkarr[0]) + 1;
		}
		return $pr1 . '' . $max;
	}
?>