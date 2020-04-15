<?php

$department			= $_POST ['department'];
$office				= $_POST['office'];
$hereby				= $_POST ['surname_initials'];
$handover 			= $_POST ['surname_initials1'];
$head_office 		= $_POST ['head_office'];
$date 				= $_POST ['date'];
$cash				= $_POST ['cash'];
$cheques			= $_POST ['cheques'];
$post_dated_cheques	= $_POST ['post_dated_cheques'];
$other				= $_POST ['other'];
$total_amount		= $_POST ['total_amount'];
$range_from			= $_POST ['range_from'];
$range_to			= $_POST ['range_to'];
$total_amount1		= $_POST ['total_amount1'];
$handing			= $_POST ['handing'];
$receaving			= $_POST ['receaving'];
$authorising		= $_POST ['authorising'];
$rank1				= $_POST ['rank1'];
$rank2				= $_POST ['rank2'];
$rank3				= $_POST ['rank3'];
$date1				= $_POST ['date1'];
$date2				= $_POST ['date2'];
$date3				= $_POST ['date3'];


if(isset($_POST['submit']))	{
	mysql_connect ("localhost", "root", "") or die ("connection failed");
	mysql_select_db("test");
	$query=mysql_query("INSERT INTO handover(department, office, surname_initials, surname_initials1, head_office, date, cash, cheques, post_dated_cheques, other, total_amount, range_from, range_to, total_amount1, handing, receaving, authorising, rank1, rank2, rank3, date1, date2, date3) 
	VALUES('$department', '$office', '$hereby', '$handover', '$head_office', '$date', '$cash', '$cheques', '$post_dated_cheques', '$other', '$total_amount', '$range_from', '$range_to', '$total_amount1', '$handing', '$receaving', '$authorising', '$rank1', '$rank2', '$rank3', '$date1', '$date2', '$date3')");
	
}
else {
	echo "please fill all the tabs";
}

?>