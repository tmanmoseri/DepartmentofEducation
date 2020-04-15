<?php

$surname_initials		= $_POST ['surname_initials'];
$authorised_signature	= $_POST ['authorised_signature'];
$date 					= $_POST ['date'];
$bank_name 				= $_POST ['bank_name'];
$branch					= $_POST ['branch'];
$branch_code			= $_POST ['branch_code'];
$acc_no					= $_POST ['acc_no'];
$acc_type				= $_POST ['R1'];
$other					= $_POST ['other'];
$address				= $_POST ['address'];
$date_stamp				= $_POST ['date_stamp'];



if(isset($_POST['submit'])) {
	mysql_connect ("localhost", "root", "") or die ("connection failed");
	mysql_select_db ("test");
	$query="INSERT INTO bank_details(surname_initials,authorised_signature, date, bank_name, branch, branch_code, acc_no, acc_type, other, address, date_stamp)
	VALUES('$surname_initials', '$authorised_signature', '$date', '$bank_name', '$branch', '$branch_code', '$acc_no', '$acc_type', '$other', '$address', '$date_stamp')";
	
	if(mysql_query($query))
	{
echo "successfully submited";
}
else {
	echo "something is wrong with the query";
}
}

?>