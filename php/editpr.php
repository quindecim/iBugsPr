<?php
	require 'startsess.php';
	require 'connectdb.php';
	require 'unzip.php';

	echo 'tagda q pls<br>';

	// $chkmax = pg_query($dbconn, "SELECT max(pr_number2) FROM purchase where pr_number1 = $_SESSION['pr1']");
	// if(!$chkmax) {
	// 	$errormessage = pg_last_error();
	// 	echo "Error with query: ". $errormessage;
	// 	exit();
	// }else {
	// 	$chkarr = pg_fetch_array($chkmax);
	// 	$max = $chkarr[0];
	// 	$_SESSION['pr2'] = $max;
	// }
	
	$xmlString = str_replace('#name', $_SESSION['name'], $xmlString);
	$xmlString = str_replace('#fund', $_SESSION['cluster'], $xmlString);
	$xmlString = str_replace('#ofc', $_SESSION['office'], $xmlString);
	$xmlString = str_replace('#rscode', $_SESSION['rscode'], $xmlString);
	$xmlString = str_replace('#purpose', $_SESSION['purpose'], $xmlString);
	$xmlString = str_replace('#date', $_SESSION['date'], $xmlString);
	$xmlString = str_replace('#prno', $_SESSION['pr1'] . $_SESSION['pr2'], $xmlString);

	$zip->addFromString('word/document.xml', $xmlString);
	$zip->close();
	header("Location: ../HTML/PR_Input_1.php");

?>