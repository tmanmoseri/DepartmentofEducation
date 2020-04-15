<?php

if(isset($_REQUEST['submit'])) {
	
	$id = $_GET['search'] ;
	
	
	mysql_connect ("localhost", "root", "") or die ("connection failed");
	mysql_select_db("test");
	
	$query ="SELECT * FROM tel_reg WHERE id='$id'";
	
	if($query === FALSE) {
		echo "didn't search";   // die(mysql_error());		
 
	}
	
	$query=mysql_query($query);
	$num = mysql_num_rows($query);
	
	if($num==0)
		{
			header('location: s tel reg.html ');
			
			//echo "<h3>no results found</h3>";
		}
		else
		{
	while ($rec = mysql_fetch_array($query, MYSQL_ASSOC)){
	
							$id1					= $rec["id"];
							$department				= $rec["department"];
							$office					= $rec["office"];
							$interface_name			= $rec["interface_name"];
							$payer_no				= $rec["payer_no"];
							$gov_code			 	= $rec["gov_code"];
							$tell_acc 				= $rec["tell_acc"];
							$area_code 				= $rec["area_code"];
							$tell_category 			= $rec["tell_category"];
							$dial_code1				= $rec["dial_code1"];
							$tell_no1				= $rec["tell_no1"];
							$end_date1				= $rec["end_date1"];
							$dial_code2				= $rec["dial_code2"];
							$tell_no2				= $rec["tell_no2"];
							$end_date2				= $rec["end_date2"];
							$dial_code3				= $rec["dial_code3"];
							$tell_no3				= $rec["tell_no3"];
							$end_date3				= $rec["end_date3"];
							$dial_code4				= $rec["dial_code4"];
							$tell_no4				= $rec["tell_no4"];
							$end_date4				= $rec["end_date4"];
							$dial_code5				= $rec["dial_code5"];
							$tell_no5				= $rec["tell_no5"];
							$end_date5				= $rec["end_date5"];
							$fund					= $rec["fund"];
							$objective				= $rec["objective"];
							$project				= $rec["project"];
							$net_assets				= $rec["net_assets"];
							$regional_id			= $rec["regional_id"];
							$responsibility			= $rec["responsibility"];
							$item					= $rec["item"];
							$matching_field1		= $rec["matching_field1"];
							$matching_field2		= $rec["matching_field2"];
							$matching_field3		= $rec["matching_field3"];
							$credit_or_debit		= $rec["credit_or_debit"];
							$allocation_amount		= $rec["allocation_amount"];
							$allocation_percent		= $rec["allocation_percent"];
							$fund1					= $rec["fund1"];
							$objective1				= $rec["objective1"];
							$project1				= $rec["project1"];
							$net_assets1			= $rec["net_assets1"];
							$regional_id1			= $rec["regional_id1"];
							$responsibility1		= $rec["responsibility1"];
							$item1					= $rec["item1"];
							$matching_field4		= $rec["matching_field4"];
							$matching_field5		= $rec["matching_field5"];
							$matching_field6		= $rec["matching_field6"];
							$credit_or_debit1		= $rec["credit_or_debit1"];
							$allocation_amount1		= $rec["allocation_amount1"];
							$allocation_percent1	= $rec["allocation_percent1"];
							$compiled_by			= $rec["compiled_by"];
							$checked_by				= $rec["checked_by"];
							$authorised_by			= $rec["authorised_by"];
							$default_responsibility	= $rec["default_responsibility"];
							$rank1					= $rec["rank1"];
							$rank2					= $rec["rank2"];
							$rank3					= $rec["rank3"];
							$signature1				= $rec["signature1"];
							$signature2				= $rec["signature2"];
							$signature3				= $rec["signature3"];
							$date1					= $rec["date1"];
							$date2					= $rec["date2"];
							$date3					= $rec["date3"];

				}	
					echo "$id";
					echo "<br />";
					echo "$department";
					echo "<br />";
					echo "$date1";
					echo "<br />";
		}
	}
?>