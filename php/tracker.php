<?php 

	$q = 'SELECT track_office, track_status, track_flow FROM tracking WHERE track_prnum1 = ' . $_SESSION['pr1'] . ' AND track_prnum2 = ' . $_SESSION['pr2'];
	$r = pg_query($dbconn, $q);
	if(!$r) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		exit();
	}

	$row = pg_fetch_array($r, 0);
	$_SESSION['pr_ofc'] = $row[0];
	$_SESSION['curr_ofc'] = $row[2];
	$_SESSION['curr_stat'] = $row[1];

	if($_SESSION['curr_ofc'] == 20) {
		$_SESSION['curr_ord'] = 2;
	}else if($_SESSION['curr_ofc'] == 21) {
		$_SESSION['curr_ord'] = 3;
	}else if($_SESSION['curr_ofc'] == 22) {
		$_SESSION['curr_ord'] = 4;
	}else if($_SESSION['curr_ofc'] == 23 || $_SESSION['curr_ofc'] == 1) {
		$_SESSION['curr_ord'] = 5;
	}else {
		$_SESSION['curr_ord'] = 1;
	}

	function pr_status($ofc, $ord) {
		$status = 'Pending';

		if($ofc == $_SESSION['curr_ofc'] && $_SESSION['flag'] || $ord == $_SESSION['curr_ord']) {
			$status = $_SESSION['curr_stat'];
			$_SESSION['curr_ord'] = $ord;
		}else {
			if($ord < $_SESSION['curr_ord']) {
				$status = 'Approved';
			}else if($_SESSION['curr_stat'] == 'Declined') {
				$status = '';
			}
		}

		echo $ord . ' ' . $_SESSION['curr_ord'] . ' ' . $_SESSION['ch'] . ' ' . $_SESSION['curr_ofc'] . ' ' . $_SESSION['flag'];
	}

	function pr_color($n) {
		$color = 'active';

		if($n < $_SESSION['curr_ord']) {
			$color = 'success';
		}if($n == $_SESSION['curr_ord']) {
			if($_SESSION['curr_stat'] == 'In Progress') {
				$color = 'info';
			}else if($_SESSION['curr_stat'] == 'On Hold') {
				$color = 'warning';
			}else if($_SESSION['curr_stat'] == 'Declined') {
				$color = 'danger';
			}else if($_SESSION['curr_stat'] == 'Approved') {
				$color = 'success';
			}
		}
		

		echo $color;
	}

?>

<!--
.active		Applies the hover color to the table row or table cell
.success	Indicates a successful or positive action
.info		Indicates a neutral informative change or action
.warning	Indicates a warning that might need attention
.danger		Indicates a dangerous or potentially negative action 
-->