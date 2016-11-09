<?php
	require 'startsess.php';

	if($_SESSION['user'] == 123456789) {
		$_SESSION['username'] = 'atbaclado';
		$_SESSION['user_ofc'] = 10;
		$_SESSION['user_type'] = 'clerk';
	}

	if($_SESSION['user'] == 234567891) {
		$_SESSION['username'] = 'njsalloman';
		$_SESSION['user_ofc'] = 20;
		$_SESSION['user_type'] = 'ofc_head';
	}

	if($_SESSION['user'] == 456789123) {
		$_SESSION['username'] = 'jomajait';
		$_SESSION['user_ofc'] = 21;
		$_SESSION['user_type'] = 'ofc_head';
	}

	if($_SESSION['user'] == 345678912) {
		$_SESSION['username'] = 'jdirasusta';
		$_SESSION['user_ofc'] = 22;
		$_SESSION['user_type'] = 'ada';
	}

	if($_SESSION['user'] == 567891234) {
		$_SESSION['username'] = 'kspanerio';
		$_SESSION['user_ofc'] = 23;
		$_SESSION['user_type'] = 'head';
	}

	$_SESSION['last_ofc'] = 23;
	$_SESSION['pr1'] = 201610;
	$_SESSION['pr2'] = 1;
	$_SESSION['flag'] = False;
	$_SESSION['ch'] = '';

	header('Location: ../home.php');

?>