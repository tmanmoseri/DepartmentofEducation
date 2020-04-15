<?php

if(isset($_REQUEST['submit'])) {
	
	$id = $_GET['search'] ;
	
	
	mysql_connect ("localhost", "root", "") or die ("connection failed");
	mysql_select_db("test");
	
	$query ="SELECT * FROM tandc_claims WHERE id='$id'";
	
	if($query === FALSE) {
		echo "didn't search";   // die(mysql_error());		
 
	}
	
	$query=mysql_query($query);
	$num = mysql_num_rows($query);
	
	if($num==0)
		{
			header('location: s t&c claims.html ');
			
			//echo "<h3>no results found</h3>";
		}
		else
		{
	while ($rec = mysql_fetch_array($query, MYSQL_ASSOC)){
	
							$id1				= $rec["id"];
							$department			= $rec["department"];
							$office				= $rec["office"];
							$persal_no			= $rec["persal_no"];
							$surname_initials	= $rec["surname_initials"];
							$claim_description 	= $rec["claim_description"];
							$period_from 		= $rec["period_from"];
							$period_to			= $rec["period_to"];
							$reference_no		= $rec["reference_no"];
							$payment_method		= $rec["payment_method"];
							$cheque_date		= $rec["cheque_date"];
							$micr_no			= $rec["micr_no"];
							$amount				= $rec["amount"];
							$fund				= $rec["fund"];
							$objective			= $rec["objective"];
							$project			= $rec["project"];
							$net_assets			= $rec["net_assets"];
							$regional_id		= $rec["regional_id"];
							$responsibility		= $rec["responsibility"];
							$item				= $rec["item"];
							$matching_field1	= $rec["matching_field1"];
							$matching_field2	= $rec["matching_field2"];
							$matching_field3	= $rec["matching_field3"];
							$allocation_amount	= $rec["allocation_amount"];
							$allocation_percent	= $rec["allocation_percent"];
							$applicant			= $rec["applicant"];
							$checked_by			= $rec["checked_by"];
							$authorised_by		= $rec["authorised_by"];
							$rank1				= $rec["rank1"];
							$rank2				= $rec["rank2"];
							$rank3				= $rec["rank3"];
							$date1				= $rec["date1"];
							$date2				= $rec["date2"];
							$date3				= $rec["date3"];
							$annual_salary		= $rec["annual_salary"];
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