<?php

$department			= $_POST ['department'];
$office				= $_POST['office'];
$update_type		= $_POST ['R1'];
$debt_agree_type	= $_POST ['R2'];
$debt_no1			= $_POST ['debt_no1'];
$debt_name		 	= $_POST ['debt_name'];
$debt_address		= $_POST ['debt_address'];
$debt_no2			= $_POST ['debt_no2'];
$date_originated	= $_POST ['date_originated'];
$debt_type			= $_POST ['debt_type'];
$review_date		= $_POST ['review_date'];
$statement			= $_POST ['R3'];
$reference_no		= $_POST ['reference_no'];
$debt_description	= $_POST ['debt_description'];
$book_years			= $_POST ['R4'];
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
$debt_amount		= $_POST ['debt_amount'];
$allocation_percent	= $_POST ['allocation_percent'];
$interest_rate		= $_POST ['R5'];
$addendum_date		= $_POST ['addendum_date'];
$interest_date		= $_POST ['interest_date'];
$installment		= $_POST ['installment'];
$persal_deduction	= $_POST ['persal_deduction'];
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
										update_type, 
										debt_agree_type, 
										debt_no1,
										debt_name, 
										debt_address,
										debt_no2, 
										date_originated, 
										debt_type, 
										review_date, 
										statement,
										reference_no,
										debt_description, 
										book_years,
										interest,
										addendum_date,
										interest_date,
										installment,
										persal_deduction,
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
										debt_amount, 
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
										'$update_type',
										'$debt_agree_type', 
										'$debt_no1', 
										'$debt_name',
										'$debt_address', 
										'$debt_no2',
										'$date_originated',
										'$debt_type',
										'$review_date',
										'$statement', 
										'$reference_no', 
										'$debt_description', 
										'$book_years',
										'$interest',
										'$addendum_date',
										'$interest_date',
										'$installment',
										'$persal_deduction',
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
										'$debt_amount', 
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