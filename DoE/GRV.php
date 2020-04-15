<?php

$department			= $_POST ['department'];
$office				= $_POST ['office'];
$voucher_no			= $_POST ['voucher_no'];
$order_description	= $_POST ['order_description'];
$order_no			= $_POST ['order_no'];
$voucher_date 		= $_POST ['voucher_date'];
$supplier 			= $_POST ['supplier'];
$captured_by		= $_POST ['captured_by'];
$authorised_by		= $_POST ['authorised_by'];
$over_authorised_by	= $_POST ['over_authorised_by'];
$date1				= $_POST ['date1'];
$date2				= $_POST ['date2'];
$date3				= $_POST ['date3'];
$date4				= $_POST ['date4'];
$date5				= $_POST ['date5'];
$date6				= $_POST ['date6'];
$date7				= $_POST ['date7'];
$rank1				= $_POST ['rank1'];
$rank2				= $_POST ['rank2'];
$rank3				= $_POST ['rank3'];
$rank4				= $_POST ['rank4'];
$name1				= $_POST ['name1'];
$name2				= $_POST ['name2'];
$name3				= $_POST ['name3'];
$name4				= $_POST ['name4'];
$checked			= $_POST ['checked'];
$captured			= $_POST ['captured'];
$warehouse			= $_POST ['warehouse'];
$transit			= $_POST ['transit'];
$total				= $_POST ['total'];
$description1		= $_POST ['description1'];
$Ddate1				= $_POST ['Ddate1'];
$Damount1			= $_POST ['Damount1'];
$Dpercent1			= $_POST ['Dpercent1'];
$ordered1			= $_POST ['ordered1'];
$received1			= $_POST ['received1'];
$quoted_price1		= $_POST ['quoted_price1'];
$receipt_price1		= $_POST ['receipt_price1'];
$amount1			= $_POST ['amount1'];
$description2		= $_POST ['description2'];
$Ddate2				= $_POST ['Ddate2'];
$Damount2			= $_POST ['Damount2'];
$Dpercent2			= $_POST ['Dpercent2'];
$ordered2			= $_POST ['ordered2'];
$received2			= $_POST ['received2'];
$quoted_price2		= $_POST ['quoted_price2'];
$receipt_price2		= $_POST ['receipt_price2'];
$amount2			= $_POST ['amount2'];
$description3		= $_POST ['description3'];
$Ddate3				= $_POST ['Ddate3'];
$Damount3			= $_POST ['Damount3'];
$Dpercent3			= $_POST ['Dpercent3'];
$ordered3			= $_POST ['ordered3'];
$received3			= $_POST ['received3'];
$quoted_price3		= $_POST ['quoted_price3'];
$receipt_price3		= $_POST ['receipt_price3'];
$amount3			= $_POST ['amount3'];

$description4		= $_POST ['description4'];
$Ddate4				= $_POST ['Ddate4'];
$Damount4			= $_POST ['Damount4'];
$Dpercent4			= $_POST ['Dpercent4'];
$ordered4			= $_POST ['ordered4'];
$received14			= $_POST ['received4'];
$quoted_price4		= $_POST ['quoted_price4'];
$receipt_price4		= $_POST ['receipt_price4'];
$amount4			= $_POST ['amount4'];

$description5		= $_POST ['description5'];
$Ddate5				= $_POST ['Ddate5'];
$Damount5			= $_POST ['Damount5'];
$Dpercent5			= $_POST ['Dpercent5'];
$ordered5			= $_POST ['ordered5'];
$received5			= $_POST ['received5'];
$quoted_price5		= $_POST ['quoted_price5'];
$receipt_price5		= $_POST ['receipt_price5'];
$amount5			= $_POST ['amount5'];
$description6		= $_POST ['description6'];
$Ddate6				= $_POST ['Ddate6'];
$Damount6			= $_POST ['Damount6'];
$Dpercent6			= $_POST ['Dpercent6'];
$ordered6			= $_POST ['ordered6'];
$received6			= $_POST ['received6'];
$quoted_price6		= $_POST ['quoted_price6'];
$receipt_price6		= $_POST ['receipt_price6'];
$amount6			= $_POST ['amount6'];
$description7		= $_POST ['description7'];
$Ddate7				= $_POST ['Ddate7'];
$Damount7			= $_POST ['Damount7'];
$Dpercent7			= $_POST ['Dpercent7'];
$ordered7			= $_POST ['ordered7'];
$received7			= $_POST ['received7'];
$quoted_price7		= $_POST ['quoted_price7'];
$receipt_price7		= $_POST ['receipt_price7'];
$amount7			= $_POST ['amount7'];
$description8		= $_POST ['description8'];
$Ddate18			= $_POST ['Ddate8'];
$Damount8			= $_POST ['Damount8'];
$Dpercent8			= $_POST ['Dpercent8'];
$ordered8			= $_POST ['ordered8'];
$received8			= $_POST ['received8'];
$quoted_price8		= $_POST ['quoted_price8'];
$receipt_price8		= $_POST ['receipt_price8'];
$amount18			= $_POST ['amount8'];
$description9		= $_POST ['description9'];
$Ddate9				= $_POST ['Ddate9'];
$Damount9			= $_POST ['Damount9'];
$Dpercent9			= $_POST ['Dpercent9'];
$ordered9			= $_POST ['ordered9'];
$received9			= $_POST ['received9'];
$quoted_price9		= $_POST ['quoted_price9'];
$receipt_price9		= $_POST ['receipt_price9'];
$amount9			= $_POST ['amount9'];


if(isset($_POST['submit'])) {
	mysql_connect ("localhost", "root", "") or die ("connection failed");
	mysql_select_db ("test");
	$query="INSERT INTO grv(department, office, ) 
	VALUES('$department', '$office',)";
	
	if(mysql_query($query))
	{
echo "successfully submited";
}
else {
	echo "something is wrong with the query";
}
}







$department			= $_POST ['department'];
$office				= $_POST ['office'];
$voucher_no			= $_POST ['voucher_no'];
$order_description	= $_POST ['order_description'];
$order_no			= $_POST ['order_no'];
$voucher_date 		= $_POST ['voucher_date'];
$supplier 			= $_POST ['supplier'];
$captured_by		= $_POST ['captured_by'];
$authorised_by		= $_POST ['authorised_by'];
$over_authorised_by	= $_POST ['over_authorised_by'];
$date1				= $_POST ['date1'];
$date2				= $_POST ['date2'];
$date3				= $_POST ['date3'];
$date4				= $_POST ['date4'];
$date5				= $_POST ['date5'];
$date6				= $_POST ['date6'];
$date7				= $_POST ['date7'];
$rank1				= $_POST ['rank1'];
$rank2				= $_POST ['rank2'];
$rank3				= $_POST ['rank3'];
$rank4				= $_POST ['rank4'];
$name1				= $_POST ['name1'];
$name2				= $_POST ['name2'];
$name3				= $_POST ['name3'];
$name4				= $_POST ['name4'];
$checked			= $_POST ['checked'];
$captured			= $_POST ['captured'];
$warehouse			= $_POST ['warehouse'];
$transit			= $_POST ['transit'];
$total				= $_POST ['total'];
$description1		= $_POST ['description1'];
$Ddate1				= $_POST ['Ddate1'];
$Damount1			= $_POST ['Damount1'];
$Dpercent1			= $_POST ['Dpercent1'];
$ordered1			= $_POST ['ordered1'];
$received1			= $_POST ['received1'];
$quoted_price1		= $_POST ['quoted_price1'];
$receipt_price1		= $_POST ['receipt_price1'];
$amount1			= $_POST ['amount1'];
$description2		= $_POST ['description2'];
$Ddate2				= $_POST ['Ddate2'];
$Damount2			= $_POST ['Damount2'];
$Dpercent2			= $_POST ['Dpercent2'];
$ordered2			= $_POST ['ordered2'];
$received2			= $_POST ['received2'];
$quoted_price2		= $_POST ['quoted_price2'];
$receipt_price2		= $_POST ['receipt_price2'];
$amount2			= $_POST ['amount2'];
$description3		= $_POST ['description3'];
$Ddate3				= $_POST ['Ddate3'];
$Damount3			= $_POST ['Damount3'];
$Dpercent3			= $_POST ['Dpercent3'];
$ordered3			= $_POST ['ordered3'];
$received3			= $_POST ['received3'];
$quoted_price3		= $_POST ['quoted_price3'];
$receipt_price3		= $_POST ['receipt_price3'];
$amount3			= $_POST ['amount3'];

$description4		= $_POST ['description4'];
$Ddate4				= $_POST ['Ddate4'];
$Damount4			= $_POST ['Damount4'];
$Dpercent4			= $_POST ['Dpercent4'];
$ordered4			= $_POST ['ordered4'];
$received14			= $_POST ['received4'];
$quoted_price4		= $_POST ['quoted_price4'];
$receipt_price4		= $_POST ['receipt_price4'];
$amount4			= $_POST ['amount4'];

$description5		= $_POST ['description5'];
$Ddate5				= $_POST ['Ddate5'];
$Damount5			= $_POST ['Damount5'];
$Dpercent5			= $_POST ['Dpercent5'];
$ordered5			= $_POST ['ordered5'];
$received5			= $_POST ['received5'];
$quoted_price5		= $_POST ['quoted_price5'];
$receipt_price5		= $_POST ['receipt_price5'];
$amount5			= $_POST ['amount5'];
$description6		= $_POST ['description6'];
$Ddate6				= $_POST ['Ddate6'];
$Damount6			= $_POST ['Damount6'];
$Dpercent6			= $_POST ['Dpercent6'];
$ordered6			= $_POST ['ordered6'];
$received6			= $_POST ['received6'];
$quoted_price6		= $_POST ['quoted_price6'];
$receipt_price6		= $_POST ['receipt_price6'];
$amount6			= $_POST ['amount6'];
$description7		= $_POST ['description7'];
$Ddate7				= $_POST ['Ddate7'];
$Damount7			= $_POST ['Damount7'];
$Dpercent7			= $_POST ['Dpercent7'];
$ordered7			= $_POST ['ordered7'];
$received7			= $_POST ['received7'];
$quoted_price7		= $_POST ['quoted_price7'];
$receipt_price7		= $_POST ['receipt_price7'];
$amount7			= $_POST ['amount7'];
$description8		= $_POST ['description8'];
$Ddate18			= $_POST ['Ddate8'];
$Damount8			= $_POST ['Damount8'];
$Dpercent8			= $_POST ['Dpercent8'];
$ordered8			= $_POST ['ordered8'];
$received8			= $_POST ['received8'];
$quoted_price8		= $_POST ['quoted_price8'];
$receipt_price8		= $_POST ['receipt_price8'];
$amount18			= $_POST ['amount8'];
$description9		= $_POST ['description9'];
$Ddate9				= $_POST ['Ddate9'];
$Damount9			= $_POST ['Damount9'];
$Dpercent9			= $_POST ['Dpercent9'];
$ordered9			= $_POST ['ordered9'];
$received9			= $_POST ['received9'];
$quoted_price9		= $_POST ['quoted_price9'];
receipt_price9'];
amount9'];












?>