<?php

$department			= $_POST ['department'];
$office				= $_POST['office'];
$beneficiary_name	= $_POST ['beneficiary_name'];
$reason_canceling	= $_POST ['R1'];
$other				= $_POST ['other'];
$disbursement_no 	= $_POST ['disbursement_no'];
$cheque_no			= $_POST ['cheque_no'];
$cheque_date1		= $_POST ['cheque_date1'];
$amount1			= $_POST ['amount1'];
$disbursement_type	= $_POST ['R2'];
$re_issue_options	= $_POST ['R3'];
$payment_method		= $_POST ['R4'];
$cheque_date2		= $_POST ['cheque_date2'];
$micr_no			= $_POST ['micr_no'];
$amount2			= $_POST ['amount2'];
$compiled_by		= $_POST ['compiled_by'];
$checked_by			= $_POST ['checked_by'];
$authorised_by		= $_POST ['authorised_by'];
$rank1				= $_POST ['rank1'];
$rank2				= $_POST ['rank2'];
$rank3				= $_POST ['rank3'];
$date1				= $_POST ['date1'];
$date2				= $_POST ['date2'];
$date3				= $_POST ['date3'];
$fullnames			= $_POST ['fullnames'];
$firm				= $_POST ['firm'];
$Dcheque_no			= $_POST ['Dcheque_no'];
$Dcheque_date		= $_POST ['Dcheque_date'];
$Dcheque_amount		= $_POST ['Dcheque_amount'];
$id_no1				= $_POST ['id_no1'];
$id_no2				= $_POST ['id_no2'];
$Ddate1				= $_POST ['Ddate1'];
$Ddate2				= $_POST ['Ddate2'];
$address1			= $_POST ['address1'];
$address2			= $_POST ['address2'];
$office_date		= $_POST ['office_date'];
$Oauthorised_by		= $_POST ['Oauthorised_by'];
$Orank				= $_POST ['Orank'];
$Odate				= $_POST ['Odate'];



if(isset($_POST['submit'])) {
	mysql_connect ("localhost", "root", "") or die ("connection failed");
	mysql_select_db("testdb");
	$query="INSERT INTO cancelreissue (department, office, beneficiary_name, reason_canceling, disbursement_no, cheque_no, cheque_date1, amount1, disbursement_type, re_issue_options, payment_method, cheque_date2, micr_no, amount2, compiled_by, checked_by, authorised_by, rank1, rank2, rank3, date1, date2, date3, fullnames, firm, Dcheque_no, Dcheque_date, Dcheque_amount, id_no1, id_no2, Ddate1, Ddate2, address1, address2, office_date, Oauthorised_by, Orank, Odate, other) 
	VALUES('$department', '$office', '$beneficiary_name', '$reason_canceling', '$disbursement_no', '$cheque_no', '$cheque_date1', '$amount1', '$disbursement_type', '$re_issue_options', '$payment_method', '$cheque_date2', '$micr_no', '$amount2', '$compiled_by', '$checked_by','$authorised_by', '$rank1', '$rank2', '$rank3', '$date1', '$date2', '$date3', '$fullnames', '$firm', '$Dcheque_no', '$Dcheque_date', '$Dcheque_amount', '$id_no1', '$id_no2', '$Ddate1', '$Ddate2', '$address1', '$address2', '$office_date', '$Oauthorised_by', '$Orank', '$Odate', '$other')";
	
	if(mysql_query($query))
	{
	echo "successfully submitted";
	}
else {
	echo "something is wrong";
}
}

?>