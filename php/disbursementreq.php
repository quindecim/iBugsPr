<?php
	require 'connectdb.php';
	require 'startsess.php';

	foreach ($_POST as $key => $value) {
	    ${$key} = $value;
	    $_SESSION[$key] = $value;
	}

	if($_POST['editdv']){
			include '../HTML/PR_Form2_Edit.php';
	}	else if($_POST['nextdv']){
			include '../HTML/PR_Input_3.php';
	}	else if($_POST['canceldv']){
			include '../HTML/PR_Form2_Display.php';
	}	

	//disbursement
	$pr1 = $_SESSION['pr1'];
	$pr2 = $_SESSION['pr2'];
	
	$dv_number = $pr1.$pr2;
	$_SESSION[dv] = $dv_number;
	
	$dv_date = $_SESSION['date'];
	$dv_particular = $_POST['dparticular'];
	$dv_mfop = $_POST['dmfop'];
	$dv_amount = $_POST[damount]; 

	$_SESSION[amtwords] = $dv_amount;
	
	if($_POST['newdv']){
		$query1 = "INSERT INTO disbursement (dv_number, dv_date, dv_particular, dv_mfopap, dv_amount, dv_prnum1, dv_prnum2) VALUES ($dv_number, '$dv_date', '$dv_particular', '$dv_mfop', $dv_amount, $pr1, $pr2)";
	} else if($_POST['updatedv']){
		echo $dv_prnum1.$dv_prnum2;
		$query1 = "UPDATE disbursement SET dv_particular = '$dv_particular', dv_mfopap = '$dv_mfop', dv_amount = $dv_amount";
	}

	$result1 = pg_query($query1);
	if(!$result1) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		$disbursement = False;
		exit();
	} else if($result1){
		$disbursement = True;
	}
	
	//payment
	$pay_name = $_POST['ppayee'];
	$pay_address = $_POST['paddress'];
	$pay_empnum = $_POST[pempnum];
	$pay_obrnum = $_POST[pobr];
	$pay_contact = $_POST[ptelephone]; 
	
	if($_POST['pmode'] == 'others'){
		$pay_mode = $_POST['otherpmode'];
	} else {		
		$pay_mode = $_POST['pmode'];
	}
	
	$_SESSION['mod'] = $pay_mode;
	
	if($_POST['newdv']){
		$query2 = "INSERT INTO payment VALUES($dv_number, '$pay_name', '$pay_address', $pay_empnum, $pay_obrnum, '$pay_mode', $pay_contact)";
	}  else if($_POST['updatedv']){
		$query2 = "UPDATE payment SET payee_name = '$pay_name', payee_address = '$pay_address', payee_tinnum = $pay_empnum, payee_obrnum = $pay_obrnum, payee_mode = '$pay_mode'";
	}

	$result2 = pg_query($query2);

	if(!$result2) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		$payment = False;
		exit();
	} else if($result2){
		$payment = True;
	}
	
	//accounting
	$ac_dvnum = $dv_number;
	$ac_debit = $_POST[debit];
	$ac_credit = $_POST[credit]; 
	$ac_title = $_POST['title'];
	$ac_uacscode = $_POST[uacs];
	
	
	if($_POST['newdv']){
		$query3 = "INSERT INTO accounting VALUES($dv_number, $ac_debit, $ac_credit, '$ac_title', $ac_uacscode)";
	} else if($_POST['updatedv']){
		$query3 = "UPDATE accounting SET acc_debit = $ac_debit, acc_credit = $ac_credit, acc_title = '$ac_title', acc_uacscode = $ac_uacscode";
	}

	$result3 = pg_query($query3);
	if(!$result3) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		$accounting = True;
		exit();
	} else if($result3){
		$accounting = True;
	}
	
	//receipt
	$re_adanum =$_POST[ada];
	$re_bankname = $_POST['bname'];
	$re_accnum = $_POST[accnum];
	$re_jevno = $_POST[jev];
	
	
	if($_POST['newdv']){
		$query4 = "INSERT INTO receipt VALUES($dv_number, $re_adanum, '$re_bankname', $re_accnum, $re_jevno);";
	} else if($_POST['updatedv']){
		$query4 = "UPDATE receipt SET re_adanum = $re_adanum, re_bankname = '$re_bankname', re_accnum = $re_accnum, re_jevno = $re_jevno";
	}
	$result4 = pg_query($query4);
	if(!$result4) {
		$errormessage = pg_last_error();
		echo "Error with query: ". $errormessage;
		$receipt = True;
		exit();
	} else if($result4){
		$receipt = True;
	}
	
	
	//certified na multivalued
	$cert_val1 = $_POST['cash'];
	$_SESSION['val1'] = $cert_val1;
	$cert_val2 = $_POST['subject'];
	$_SESSION['val2'] = $cert_val2;
	$cert_val3 = $_POST['support'];
	$_SESSION['val3'] = $cert_val3;

	if($_POST['updatedv']){
		$ck = "DELETE FROM certified WHERE dv_number = $dv_number";
		$ckcheck = pg_query($ck);
	}
	
	if(!empty($cert_val1)){
		$qv1 = "INSERT INTO certified VALUES($dv_number, '$cert_val1')";
		$rv1 = pg_query($qv1);	
	
	} if(!empty($cert_val2)){
		$qv2 = "INSERT INTO certified VALUES($dv_number, '$cert_val2')";
		$rv2 = pg_query($qv2);
		
	} if(!empty($cert_val3)){
		$qv3 = "INSERT INTO certified VALUES($dv_number, '$cert_val3')";
		$rv3 = pg_query($qv3);	
	}

	if($disbursement && $accounting && $payment && $receipt){
		include '../HTML/PR_Form2_Display.php';
	}
	
?>