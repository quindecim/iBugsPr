<?php 
	require 'startsess.php';
	require 'connectdb.php';

	//STATE OF PR
	if(isset($_POST['receive'])) {

		$q = "UPDATE tracking SET track_status = 'In Progress' WHERE track_prnum1 = " . $_SESSION['pr1'] . " AND track_prnum2 = " . $_SESSION['pr2'];
		$_SESSION['flag'] = False;

	}else if(isset($_POST['send'])) {

		if($_SESSION['curr_ofc'] != $_SESSION['last_ofc']) {
			if($_SESSION['curr_ofc'] == 0) {
				$_SESSION['curr_ofc'] = 20;
			}else {
				$_SESSION['curr_ofc']++;
			}
			$q = "UPDATE tracking SET (track_status, track_flow) = ('Pending', " . $_SESSION['curr_ofc'] . " ) WHERE track_prnum1 = " . $_SESSION['pr1'] . " AND track_prnum2 = " . $_SESSION['pr2'];
		}else {
			$q = "UPDATE tracking SET (track_status, track_flow) = ('Approved', 1) WHERE track_prnum1 = " . $_SESSION['pr1'] . " AND track_prnum2 = " . $_SESSION['pr2'];
		}

		$_SESSION['ch'] = 'snd';
		$_SESSION['flag'] = False;

	}else if(isset($_POST['return'])) {

		$q = "UPDATE tracking SET track_status = 'Declined' WHERE track_prnum1 = " . $_SESSION['pr1'] . " AND track_prnum2 = " . $_SESSION['pr2'];
		$_SESSION['ch'] = 'ret';
		$_SESSION['flag'] = False;

	}

	//PROGRESS OF PR
	if(isset($_POST['approve'])) {

		$q = "UPDATE tracking SET track_status = 'Approved' WHERE track_prnum1 = " . $_SESSION['pr1'] . " AND track_prnum2 = " . $_SESSION['pr2'];
		$_SESSION['flag'] = True;
		$_SESSION['ch'] = 'a';

	}else if(isset($_POST['decline'])) {
		
		$q = "UPDATE tracking SET track_status = 'Declined' WHERE track_prnum1 = " . $_SESSION['pr1'] . " AND track_prnum2 = " . $_SESSION['pr2'];
		$_SESSION['flag'] = True;
		$_SESSION['ch'] = 'd';
		
	}else {

	}
	
	$r = pg_query($dbconn, $q);
	if(!$r) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		exit();
	}

	header('Location: ../track_tbl2.php');

?>