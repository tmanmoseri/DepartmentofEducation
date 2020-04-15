<?php

$department			= $_POST ['department'];
$office				= $_POST ['office'];
$pay_description	= $_POST ['pay_description'];
$pay_name			= $_POST ['pay_name'];
$address			= $_POST ['address'];
$pay_to		 		= $_POST ['pay_to'];
$sd_type			= $_POST ['R1'];
$sd_no				= $_POST ['sd_no'];
$po_no				= $_POST ['po_no'];
$sd_date			= $_POST ['sd_date'];
$reference_no		= $_POST ['reference_no'];
$payment_method		= $_POST ['R2'];
$cheque_date		= $_POST ['cheque_date'];
$amount				= $_POST ['amount'];
$micr_no			= $_POST ['micr_no'];
$settlement_date	= $_POST ['settlement_date'];
$discount_percent	= $_POST ['discount_percent'];
$discount_date		= $_POST ['discount_date'];
$fund				= $_POST ['fund'];
$objective			= $_POST ['objective'];
$project			= $_POST ['project'];
$net_assets			= $_POST ['net_assets'];
$regional_id		= $_POST ['regional_id'];
$responsibility		= $_POST ['responsibility'];
$item				= $_POST ['item'];
$matching_field1	= $_POST ['matching_field1'];
$matching_field2	= $_POST ['matching_field2'];
$matching_field3	= $_POST ['matching_field3'];
$allocation_amount	= $_POST ['allocation_amount'];
$allocation_percent	= $_POST ['allocation_percent'];
$compiled_by		= $_POST ['compiled_by'];
$checked_by			= $_POST ['checked_by'];
$authorised_by		= $_POST ['authorised_by'];
$rank1				= $_POST ['rank1'];
$rank2				= $_POST ['rank2'];
$rank3				= $_POST ['rank3'];
$signature1			= $_POST ['signature1'];
$signature2			= $_POST ['signature2'];
$signature3			= $_POST ['signature3'];
$date1				= $_POST ['date1'];
$date2				= $_POST ['date2'];
$date3				= $_POST ['date3'];



if(isset($_POST['submit'])) {
	mysql_connect ("localhost", "root", "") or die ("connection failed");
	mysql_select_db("testdb");
	$query="INSERT INTO debt (department,
										office,
										pay_description, 
										pay_name,
										address, 
										pay_to,
										sd_type, 
										sd_no, 
										po_no, 
										sd_date, 
										reference_no,
										payment_method,
										cheque_date, 
										amount,
										micr_no,
										settlement_date,
										discount_percent,
										discount_date,
										fund,
										objective, 
										project, 
										net_assets, 
										regional_id, 
										responsibility, 
										item, 
										matching_field1, 
										matching_field2, 
										matching_field3, 
										allocation_amount, 
										allocation_percent,
										compiled_by,
										checked_by,
										authorised_by,
										rank1,
										rank2,
										rank3,
										signature1,
										signature2,
										signature3,
										date1,
										date2, 
										date3) 
								VALUES('$department',
										'$office', 
										'$pay_description',
										'$pay_name', 
										'$address', 
										'$pay_to',
										'$sd_type', 
										'$sd_no',
										'$po_no',
										'$sd_date',
										'$reference_no',
										'$payment_method', 
										'$cheque_date', 
										'$amount', 
										'$micr_no',
										'$settlement_date',
										'$discount_percent',
										'$discount_date',
										'$fund', 
										'$objective', 
										'$project', 
										'$net_assets', 
										'$regional_id', 
										'$responsibility', 
										'$item',
										'$matching_field1', 
										'$matching_field2', 
										'$matching_field3', 
										'$allocation_amount', 
										'$allocation_percent',
										'$compiled_by', 
										'$checked_by',
										'$authorised_by',
										'$rank1', 
										'$rank2',
										'$rank3',
										'$signature1',
										'$signature2',
										'$signature3',
										'$date1', 
										'$date2',
										'$date3')";
	
	if(mysql_query($query))
	{
	echo "successfully submitted";
	}
else {
	echo "something is wrong";
}
}

?>