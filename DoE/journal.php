<?php

$department				= $_POST ['department'];
$office					= $_POST ['office'];
$journal_description	= $_POST ['journal_description'];
$posting_date			= $_POST ['posting_date'];
$total_debit		 	= $_POST ['total_debit'];
$total_credit 			= $_POST ['total_credit'];
$fund					= $_POST ['fund'];
$objective				= $_POST ['objective'];
$project				= $_POST ['project'];
$net_assets				= $_POST ['net_assets'];
$regional_id			= $_POST ['regional_id'];
$responsibility			= $_POST ['responsibility'];
$item					= $_POST ['item'];
$matching_field1		= $_POST ['matching_field1'];
$matching_field2		= $_POST ['matching_field2'];
$matching_field3		= $_POST ['matching_field3'];
$credit_or_debit		= $_POST ['R1'];
$allocation_amount		= $_POST ['allocation_amount'];
$fund1					= $_POST ['fund1'];
$objective1				= $_POST ['objective1'];
$project1				= $_POST ['project1'];
$net_assets1			= $_POST ['net_assets1'];
$regional_id1			= $_POST ['regional_id1'];
$responsibility1		= $_POST ['responsibility1'];
$item1					= $_POST ['item1'];
$matching_field4		= $_POST ['matching_field4'];
$matching_field5		= $_POST ['matching_field5'];
$matching_field6		= $_POST ['matching_field6'];
$credit_or_debit1		= $_POST ['R2'];
$allocation_amount1		= $_POST ['allocation_amount1'];
$compiled_by			= $_POST ['compiled_by'];
$checked_by				= $_POST ['checked_by'];
$authorised_by			= $_POST ['authorised_by'];
$rank1					= $_POST ['rank1'];
$rank2					= $_POST ['rank2'];
$rank3					= $_POST ['rank3'];
$signature1				= $_POST ['signature1'];
$signature2				= $_POST ['signature2'];
$signature3				= $_POST ['signature3'];
$date1					= $_POST ['date1'];
$date2					= $_POST ['date2'];
$date3					= $_POST ['date3'];




if(isset($_POST['submit'])) {
	mysql_connect ("localhost", "root", "") or die ("connection failed");
	mysql_select_db ("test");
	$query="INSERT INTO journal(department, office, journal_description, posting_date, total_debit, total_credit, fund, objective, project, net_assets, regional_id, responsibility, item, matching_field1, matching_field2, matching_field3, credit_or_debit, allocation_amount, fund1, objective1, project1, net_assets1, regional_id1, responsibility1, item1, matching_field4, matching_field5, matching_field6, credit_or_debit1, allocation_amount1, compiled_by, checked_by, authorised_by, rank1, rank2, rank3, signature1, signature2, signature3, date1, date2, date3) 
	VALUES('$department', '$office', '$journal_description', '$posting_date', '$total_debit', '$total_credit', '$fund', '$objective', '$project', '$net_assets', '$regional_id', '$responsibility', '$item', '$matching_field1', '$matching_field2', '$matching_field3', '$credit_or_debit', '$allocation_amount', '$fund1', '$objective1', '$project1', '$net_assets1', '$regional_id1', '$responsibility1', '$item1', '$matching_field4', '$matching_field5', '$matching_field6', '$credit_or_debit1', '$allocation_amount1', '$compiled_by', '$checked_by', '$authorised_by', '$rank1', '$rank2', '$rank3', '$signature1', '$signature2', '$signature3', '$date1', '$date2', '$date3')";
	
	if(mysql_query($query))
	{
echo "successfully submited";
}
else {
	echo "something is wrong with the query";
}
}

?>