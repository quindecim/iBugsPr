<?php 

	$q = 'SELECT track_office, track_status FROM tracking WHERE track_prnum1 = ' . $_SESSION['pr1'] . ' AND track_prnum2 = ' . $_SESSION['pr2'];
	$r = pg_query($dbconn, $q);
	if(!$r) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		exit();
	}else {
		$row = pg_fetch_array($r, 0);
		$_SESSION['curr_ofc'] = $row[0];
		$_SESSION['curr_stat'] = $row[1];

		if($_SESSION['curr_ofc'] < 20) {
			$_SESSION['curr_ord'] = 1;
		}else if($_SESSION['curr_ofc'] == 21) {
			$_SESSION['curr_ord'] = 3;
		}else if($_SESSION['curr_ofc'] == 22) {
			$_SESSION['curr_ord'] = 4;
		}else if($_SESSION['curr_ofc'] == 23) {
			$_SESSION['curr_ord'] = 5;
		}else {
			$_SESSION['curr_ord'] = 2;
		}

	}

	function pr_status($ofc, $ord) {
		$status = 'Pending';

		if($_SESSION['curr_stat'] == 'Declined' && !$_SESSION['flage'] ) {
			$status = '';
		}

		if($ofc == $_SESSION['curr_ofc'] && $_SESSION['flag']) {
			$status = $_SESSION['curr_stat'];
			$_SESSION['flag'] = False;
			$_SESSION['curr_ord'] = $ord;
		}else {
			if($_SESSION['flag']) {
				$status = 'Approved';
			}
		}

		echo $status;
	}

	function pr_color($n) {
		$color = 'active';

		if($n < $_SESSION['curr_ord']) {
			$color = 'success';
		}else if($n == $_SESSION['curr_ord']) {
			if($_SESSION['curr_stat'] == 'In Progress') {
				$color = 'info';
			}else if($_SESSION['curr_stat'] == 'On Hold') {
				$color = 'warning';
			}else if($_SESSION['curr_stat'] == 'Declined') {
				$color = 'danger';
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