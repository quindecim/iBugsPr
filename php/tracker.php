<?php 

	function set_track() {
		$q = 'SELECT * FROM tracking WHERE track_prnum1 = ' . $_SESSION['pr1'] . ' AND track_prnum2 = ' . $_SESSION['pr2'];
		$r = pg_query($dbconn, $q);
		$row = pg_fetch_array($r, 0);
		$_SESSION['curr_ofc'] = $row[1];
		$_SESSION['curr_stat'] = $row[3];
	}

	function pr_status($offc_num, $offc_ordr) {
		$status = 'Pending';
		$ctr = 0;

		while ($offc_ordr < 5) {
			if($offc_num == $_SESSION['curr_ofc'] && $_SESSION['flag']) {
				$status = $_SESSION['curr_stat'];
				$_SESSION['flag'] = False;
				break;
			}else {
				if($_SESSION['flag']) {
					$status = 'Approved';
				}else {
					break;
				}
			$x++;
		}

		echo  $status;
	}

	function pr_color($n) {
		$color = 'active';
		

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