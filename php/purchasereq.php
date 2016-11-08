<?php
	require 'php/startsess.php';
	require 'php/connectdb.php';

	if($_POST['edit']){
		header ('Location: PR_Form1_Edit.php');
	}else if($_POST['next']){
		header ('Location: PR_Input_2.php');
	}else if($_POST['cancelpr']){
		header ('Location: PR_Form1_Display.php');
	}

	$coffice = $_POST['cluster'];
	$pr_coffice = pg_query($dbconn, "SELECT office_num FROM office WHERE office_name = '$coffice'"); 
	$off1_array = pg_fetch_array($pr_coffice);
	$pr_cluster = $off1_array[0];
	$pr_number1 = $_SESSION['pr1'];	
	$pr_name = $_POST['name'];
	$pr_date = $_SESSION['date'];
	$pr_purpose = $_POST['purpose'];

	$rcenter = $_POST['rscode'];
	if($rcenter == NULL){
		$rcnull = TRUE;
	} else {
		$rcnull = FALSE;
		$pr_rcenter = pg_query($dbconn, "SELECT re_code FROM rescenter WHERE re_title = '$rcenter'"); // NOT REQUIRED
		$rc_array = pg_fetch_array($pr_rcenter);
		$pr_rccode = $rc_array[0];
	}
	
	$ooffice = $_POST['office'];
	if($ooffice == NULL){
		$ofnull = TRUE;
	} else {
		$ofnull = FALSE;
		$pr_ooffice = pg_query($dbconn, "SELECT office_num FROM office WHERE office_name = '$ooffice'"); //NOT REQUIRED
		$off2_array = pg_fetch_array($pr_ooffice);
		$pr_office = $off2_array[0];
	}

	//items
	$stock = $_POST['stock'];
	$unit = $_POST['unit'];
	$desc = $_POST['desc'];
	$qty = $_POST['qty'];
	$ucost = $_POST['ucost'];
	$tcost = $_POST['tcost'];

	//store into db	
	if(isset($_POST['newpr'])) {
		//query for purchase entity	
		if($rcnull && $ofnull)
			$query1 = "INSERT INTO purchase (pr_number1, pr_name, pr_date, pr_purpose, pr_cluster) VALUES ($pr_number1, '$pr_name', '$pr_date', '$pr_purpose', $pr_cluster)";
		else if($rcnull)
			$query1 = "INSERT INTO purchase (pr_number1, pr_name, pr_date, pr_purpose, pr_cluster, pr_office) VALUES ($pr_number1, '$pr_name', '$pr_date', '$pr_purpose', $pr_cluster, $pr_office)";
		else if($ofnull)
			$query1 = "INSERT INTO purchase (pr_number1, pr_rcencode, pr_name, pr_date, pr_purpose, pr_cluster) VALUES ($pr_number1, $pr_rccode, '$pr_name', '$pr_date', '$pr_purpose', $pr_cluster)";
		else
			$query1 = "INSERT INTO purchase VALUES($pr_number1, $pr_rccode, '$pr_name', '$pr_date', '$pr_purpose', $pr_cluster, '$pr_status', $pr_office)";

		$check = pg_query($dbconn, "SELECT count(*) FROM purchase where pr_number1 = $pr_number1");
		$check_arr = pg_fetch_array($check);
		$check_cnt = $check_arr[0];
		if($check_cnt == 0){
			pg_query($dbconn, "ALTER SEQUENCE purchase_pr_number2_seq RESTART WITH 1");
			pg_query($dbconn, "ALTER SEQUENCE item_item_number_seq RESTART WITH 1;");
		}

		$result1 = pg_query($dbconn, $query1);
		$p1 = $_SESSION['pr1'];
		$p2 = $_SESSION['pr2'];

		foreach($stock as $key => $value) {	
			if($value != NULL && $unit[$key] != NULL && $desc[$key] != NULL && $qty[$key] != NULL &&  $ucost[$key] != NULL && $tcost[$key] != NULL){
				echo $value;
				$query2 = "INSERT INTO item VALUES($value," . $_SESSION['pr1'] . ", '$unit[$key]', '$desc[$key]', $qty[$key], $ucost[$key], $tcost[$key], " . $_SESSION['pr2'] . ")";
			} else if($value == NULL) {
				$query2 = "INSERT INTO item (item_prnum1, item_uoissue, item_description, item_quantity, item_eunicost, item_etotcost, item_prnum2) VALUES(" . $_SESSION['pr1'] . ", '$unit[$key]', '$desc[$key]', $qty[$key], $ucost[$key], $tcost[$key], " . $_SESSION['pr2'] . ")";
			} else {
				break;
			}

			$result2 = pg_query($dbconn, $query2);
			if(!$result2) {
				$errormessage = pg_last_error();
				echo "Error with query 2: ". $errormessage;
				exit();
			} 
		}

		if(!$result1) {
			$errormessage = pg_last_error();
			echo "Error with query 1: ". $errormessage;
			exit();
		} else{
			$_SESSION['itmsize'] = count($stock);
			header('Location: ../HTML/PR_Form1_Display.php');
		}

	}

	//update items in db
	if(isset($_POST['updatepr'])) {
		$currsize = count($stock);
		$itms = $_SESSION['itmsize'];
		$r = pg_query($dbconn, "SELECT max(item_number) FROM item");
		if(!$r) {
			$errormessage = pg_last_error();
			echo "Error with query: ". $errormessage;
			exit();
		}
		$chkarr = pg_fetch_array($r);
		$max = $chkarr[0];
		$size = $max;
		$begin = 0;

		echo 'itms: ' + $itms;

		// adding / deleting fields at update
		if($currsize < $itms) {
			$del = $itms - $currsize;
			$begin = ($max + 1) - $itms;
			echo ' del: ' . $del;
			while($del > 0) {
				$result3 = pg_query($dbconn, "DELETE FROM item WHERE item_number = $size");
				if(!$result3) {
					$errormessage = pg_last_error();
					echo "Error with query 3: ". $errormessage;
					exit();
				}else {
					$del--;
					$size--;
				}
			}
		}else if($currsize > $itms) {
			$add = $currsize - $itms;
			$begin = ($max + $add) - ($currsize - 1);
			echo ' add: ' . $add;
			while($add > 0) {
				$query4 = "INSERT INTO item VALUES(0," . $_SESSION['pr1'] . ", '', '', 0, 0, 0, " . $_SESSION['pr2'] . ")";
				$result4 = pg_query($dbconn, $query4);
				if(!$result4) {
					$errormessage = pg_last_error();
					echo "Error with query 4: ". $errormessage;
					exit();
				}else {
					$add--;
				}
			}
		}else {
			$begin = ($max + 1) - $itms;
		}

		echo ' max: ' . $max . 'curr: ' . $currsize . '<br>';
		foreach ($stock as $key => $value) {
			$query5 = "UPDATE item SET (item_stocknum, item_uoissue, item_description, item_quantity, item_eunicost, item_etotcost) = ($value, '$unit[$key]', '$desc[$key]', $qty[$key], $ucost[$key], $tcost[$key]) where item_number = $begin";

			$result5 = pg_query($dbconn, $query5);
			echo $value . '-' . $begin . '  ';

			if(!$result5) {
				$errormessage = pg_last_error();
				echo "Error with query 5: ". $errormessage;
				exit();
			}else {
				$begin++;
			}

		}

		//update purchase
		if($rcnull && $ofnull)
			$query6 = "UPDATE purchase SET (pr_number1, pr_name, pr_date, pr_purpose, pr_cluster) = ($pr_number1, '$pr_name', '$pr_date', '$pr_purpose', $pr_cluster) where pr_number1 = " . $_SESSION[pr1] . "AND pr_number2 = " . $_SESSION[pr2];
		else if($rcnull)
			$query6 = "UPDATE purchase SET (pr_number1, pr_name, pr_date, pr_purpose, pr_cluster, pr_office) = ($pr_number1, '$pr_name', '$pr_date', '$pr_purpose', $pr_cluster, $pr_office) where pr_number1 = " . $_SESSION[pr1] . "AND pr_number2 = " . $_SESSION[pr2];
		else if($ofnull)
			$query6 = "UPDATE purchase SET (pr_number1, pr_rcencode, pr_name, pr_date, pr_purpose, pr_cluster) = ($pr_number1, $pr_rccode, '$pr_name', '$pr_date', '$pr_purpose', $pr_cluster) where pr_number1 = " . $_SESSION[pr1] . "AND pr_number2 = " . $_SESSION[pr2];
		else
			$query6 = "UPDATE purchase SET (pr_rcencode, pr_name, pr_purpose, pr_cluster, pr_office) = ('$pr_rccode', '$pr_name', '$pr_purpose', $pr_cluster, $pr_office) where pr_number1 = " . $_SESSION[pr1] . "AND pr_number2 = " . $_SESSION[pr2];
		
		$result6 = pg_query($dbconn, $query6);

		if(!$result6) {
			$errormessage = pg_last_error();
			echo "Error with query 6: ". $errormessage;
			exit();
		} else{
			$_SESSION['itmsize'] = count($_POST['stock']);
			header('Location: ../HTML/PR_Form1_Display.php');
		}
		
	}

	//Save Code
	foreach ($_POST as $key => $value) {
	    ${$key} = $value;
	    $_SESSION[$key] = $value;
	}

?>