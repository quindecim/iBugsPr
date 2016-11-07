<?php
	require 'startsess.php';
	require 'connectdb.php';

	$filter = $_POST['search'];
	$result = pg_query($dbconn,"SELECT  * FROM purchase where pr_name LIKE 'Katrina 2' ");
	
	
	$rs = pg_num_rows($result);
	$_SESSION['numrows'] = $rs;
	$_SESSION['result'] = pg_fetch_array($result);
	
	header ('Location: ../html/tracker.php');
	
?>