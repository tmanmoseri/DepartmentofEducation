<?php

if(isset($_REQUEST['submit'])) {
	
	$id = $_GET['search'] ;
	
	
	mysql_connect ("localhost", "root", "") or die ("connection failed");
	mysql_select_db("test");
	
	$query ="SELECT * FROM debt WHERE id='$id'";
	
	if($query === FALSE) {
		echo "didn't search";   // die(mysql_error());		
 
	}
	
	$query=mysql_query($query);
	$num = mysql_num_rows($query);	
	
	if($num==0)
		{
			header('location: s debt.html ');
		}
		else
		{
while ($rec = mysql_fetch_array($query, MYSQL_ASSOC)){
				$id					= $rec["id"];
				$department			= $rec["department"];
				$office				= $rec["office"];
				$update_type		= $rec["update_type"];
				$debt_agree_type	= $rec["debt_agree_type"];
				$debt_no1			= $rec["debt_no1"];
				$debt_name		 	= $rec["debt_name"];
				$debt_address		= $rec["debt_address"];
				$debt_no2			= $rec["debt_no2"];
				$date_originated	= $rec["date_originated"];
				$debt_type			= $rec["debt_type"];
				$review_date		= $rec["review_date"];
				$statement			= $rec["statement"];
				$reference_no		= $rec["reference_no"];
				$debt_description	= $rec["debt_description"];
				$book_years			= $rec["book_years"];
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
				$debt_amount		= $rec["debt_amount"];
				$allocation_percent	= $rec["allocation_percent"];
				$interest_rate		= $rec["interest_rate"];
				$addendum_date		= $rec["addendum_date"];
				$interest_date		= $rec["interest_date"];
				$installment		= $rec["installment"];
				$persal_deduction	= $rec["persal_deduction"];
				$compiled_by		= $rec["compiled_by"];
				$checked_by			= $rec["checked_by"];
				$authorised_by		= $rec["authorised_by"];
				$rank1				= $rec["rank1"];
				$rank2				= $rec["rank2"];
				$rank3				= $rec["rank3"];
				$signature1			= $rec["signature1"];
				$signature2			= $rec["signature2"];
				$signature3			= $rec["signature3"];
				$date1				= $rec["date1"];
				$date2				= $rec["date2"];
				$date3				= $rec["date3"];
				}			
		}
}
?>


<HTML>
<HEAD>
<TITLE>Untitled Document</TITLE>
</HEAD>

<BODY BGCOLOR="#FFFFFF">

<style type="text/css">
<!--
.excel1 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel48 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel49 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel5 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel103 {
padding:0px;
color:windowtext;
font-size:16.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel40 {
padding:0px;
color:windowtext;
font-size:16.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel102 {
padding:0px;
color:windowtext;
font-size:16.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel105 {
padding:0px;
color:windowtext;
font-size:12.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel106 {
padding:0px;
color:windowtext;
font-size:12.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel182 {
padding:0px;
color:black;
font-size:16.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel7 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel29 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel109 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel107 {
padding:0px;
color:windowtext;
font-size:14.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel108 {
padding:0px;
color:windowtext;
font-size:5.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel41 {
padding:0px;
color:windowtext;
font-size:6.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel25 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel2 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel3 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel33 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel13 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel18 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel12 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel135 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel125 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel133 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel14 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel6 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel55 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel56 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel57 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel16 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel15 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel112 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel123 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel113 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:.5pt solid windowtext;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel164 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel8 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel179 {
padding:0px;
color:windowtext;
font-size:5.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel42 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel58 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel59 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel139 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel129 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.font7 {
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Black", sans-serif;
}
.excel34 {
padding:0px;
color:windowtext;
font-size:5.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel50 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel138 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.font5 {
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
}
.excel31 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel20 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel114 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel43 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel60 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel115 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel27 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel44 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel152 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel117 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel99 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel9 {
padding:0px;
color:windowtext;
font-size:5.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel46 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel118 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel35 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel23 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel36 {
padding:0px;
color:windowtext;
font-size:5.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel19 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel30 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel116 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:2.0pt double windowtext;
border-left:.5pt solid windowtext;
}
.excel167 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:2.0pt double windowtext;
border-left:1.0pt solid windowtext;
}
.excel28 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:.5pt solid windowtext;
border-bottom:2.0pt double windowtext;
border-left:1.0pt solid windowtext;
}
.excel131 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:2.0pt double windowtext;
border-left:.5pt solid windowtext;
}
.excel53 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel76 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel79 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel80 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel81 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel104 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel83 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel82 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel72 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel73 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel74 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel91 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel86 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel92 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:fill;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel145 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel85 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel87 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel75 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel22 {
padding:0px;
color:windowtext;
font-size:4.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel151 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel88 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel90 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel89 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel21 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel24 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel26 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel45 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel155 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel11 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel47 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:2.0pt double windowtext;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel146 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:2.0pt double windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel17 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel4 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel101 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel10 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel93 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel84 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel94 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel119 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:2.0pt double windowtext;
border-left:.5pt solid windowtext;
}
.excel111 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:2.0pt double windowtext;
border-left:1.0pt solid windowtext;
}
.excel157 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel65 {
padding:0px;
color:windowtext;
font-size:6.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel32 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel66 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel181 {
padding:0px;
color:black;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:top;
border:none;
white-space:normal;
}
.excel37 {
padding:0px;
color:windowtext;
font-size:6.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel38 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel67 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel160 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel163 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel171 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel96 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel52 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel64 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel122 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel97 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel95 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel98 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel100 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel169 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel126 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.font6 {
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
}
.excel68 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel69 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel110 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel70 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel71 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel127 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel63 {
padding:0px;
color:windowtext;
font-size:5.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel174 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel51 {
padding:0px;
color:windowtext;
font-size:6.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
-->
</style>
<style type="text/css">
<!--
.excel39 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel215 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel213 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel216 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel224 {
padding:0px;
color:windowtext;
font-size:16.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel250 {
padding:0px;
color:windowtext;
font-size:14.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel132 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel162 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel54 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel158 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel61 {
padding:0px;
color:windowtext;
font-size:14.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel143 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel191 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel192 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel287 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel227 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel147 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel282 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel77 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel78 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel120 {
padding:0px;
color:windowtext;
font-size:6.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel299 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel121 {
padding:0px;
color:windowtext;
font-size:7.5pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel124 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel130 {
padding:0px;
color:windowtext;
font-size:6.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel301 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel62 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel221 {
padding:0px;
color:windowtext;
font-size:5.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel134 {
padding:0px;
color:windowtext;
font-size:5.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel303 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel136 {
padding:0px;
color:windowtext;
font-size:5.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel137 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel140 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel141 {
padding:0px;
color:windowtext;
font-size:6.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel142 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel217 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel229 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel144 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel194 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel305 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel295 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel197 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel307 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel149 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel153 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel177 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel154 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel222 {
padding:0px;
color:windowtext;
font-size:7.5pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel223 {
padding:0px;
color:windowtext;
font-size:7.5pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel218 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel128 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel156 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel273 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel294 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel211 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel165 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel166 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel148 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel168 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel170 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel172 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel173 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel161 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel175 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel176 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel290 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel318 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel292 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel315 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel207 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel317 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel209 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel208 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel285 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel280 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel314 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel321 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel316 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel184 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel258 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel185 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel275 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:2.0pt double windowtext;
border-left:.5pt solid windowtext;
}
.excel277 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:2.0pt double windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel186 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel268 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel159 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel271 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel193 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel150 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel264 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel219 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel266 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel220 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel243 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:top;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel187 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel254 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:2.0pt double windowtext;
border-left:.5pt solid windowtext;
}
.excel188 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:.5pt solid windowtext;
border-bottom:2.0pt double windowtext;
border-left:1.0pt solid windowtext;
}
.excel189 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel231 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel263 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
background:silver;
}
.excel260 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:top;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel201 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel202 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel203 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel234 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel247 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:top;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel251 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:top;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel196 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel199 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel200 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel204 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel195 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel205 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel198 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel206 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel210 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel237 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel214 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel241 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel180 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel183 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel246 {
padding:0px;
color:black;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:top;
border:none;
white-space:normal;
}
.excel178 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel212 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:italic;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
-->
</style>
<style type="text/css">
<!--
.excel190 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel339 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel337 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel340 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel348 {
padding:0px;
color:windowtext;
font-size:16.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel374 {
padding:0px;
color:windowtext;
font-size:14.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel240 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel274 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel225 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel269 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel226 {
padding:0px;
color:windowtext;
font-size:14.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel253 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel309 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel310 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel411 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel351 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel256 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel406 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel230 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel232 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel233 {
padding:0px;
color:windowtext;
font-size:6.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel423 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel235 {
padding:0px;
color:windowtext;
font-size:7.5pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel236 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel239 {
padding:0px;
color:windowtext;
font-size:6.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel425 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel228 {
    border-style: none;
        border-color: inherit;
        border-width: medium;
        padding: 0px;
        color:windowtext;
font-size:x-small;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
        text-align:general;
        vertical-align:bottom;
        white-space:nowrap;
}
.excel345 {
padding:0px;
color:windowtext;
font-size:5.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel242 {
padding:0px;
color:windowtext;
font-size:5.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel427 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel244 {
padding:0px;
color:windowtext;
font-size:5.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel245 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel248 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel249 {
padding:0px;
color:windowtext;
font-size:6.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel252 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel341 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel353 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel255 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel312 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel429 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel419 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel320 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel431 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel259 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel262 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel289 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel265 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel346 {
padding:0px;
color:windowtext;
font-size:7.5pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel347 {
padding:0px;
color:windowtext;
font-size:7.5pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel342 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel238 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel267 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel397 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:middle;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
        border-right-style: none;
        border-right-color: inherit;
        border-right-width: medium;
    }
.excel418 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel335 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel276 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel278 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel257 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel279 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel281 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel283 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel284 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel272 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel286 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel288 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel414 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel442 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel416 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel439 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel331 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel441 {
    border-style: none;
        border-color: inherit;
        border-width: medium;
        padding: 0px;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial;
        vertical-align:bottom;
        white-space:nowrap;
}
.excel333 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel332 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel409 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel404 {
padding:0px;
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel438 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel445 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel440 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel297 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel382 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel298 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel399 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:2.0pt double windowtext;
border-left:.5pt solid windowtext;
}
.excel401 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:2.0pt double windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel300 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel392 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel270 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel395 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel311 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel261 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel388 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel343 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel390 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel344 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel367 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:top;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel302 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel378 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:2.0pt double windowtext;
border-left:.5pt solid windowtext;
}
.excel304 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:.5pt solid windowtext;
border-bottom:2.0pt double windowtext;
border-left:1.0pt solid windowtext;
}
.excel306 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel355 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel387 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
background:silver;
}
.excel384 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:top;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel325 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel326 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel327 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel358 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel371 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:left;
vertical-align:top;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel375 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:top;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel319 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel323 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel324 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel328 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel313 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel329 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel322 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel330 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel334 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel361 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel338 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:general;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel365 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel293 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel296 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel370 {
padding:0px;
color:black;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:top;
border:none;
white-space:normal;
}
.excel291 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel336 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:italic;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
    #TextArea1
    {
        margin-left: 0px;
    }
    #Address
    {
        height: 53px;
        width: 353px;
    }
    #Text1
    {
        width: 40px;
    }
    #Text2
    {
        width: 420px;
    }
    #fund
    {
        width: 669px;
    }
    #fund0
    {
        width: 526px;
    }
    #OBJECTIVE
    {
        width: 669px;
        text-align: left;
    }
    #OBJECTIVE0
    {
        width: 534px;
    }
    #Projet
    {
        width: 669px;
    }
    #Projet0
    {
        width: 522px;
    }
    #Signature
    {
        width: 231px;
    }
    #Signature0
    {
        width: 190px;
    }
    #Signature1
    {
        width: 190px;
    }
    #Date
    {
        width: 233px;
    }
    #Date0
    {
        width: 187px;
    }
    #Date1
    {
        width: 187px;
    }
    .style1
    {
        border-style: none;
        border-color: inherit;
        border-width: medium;
        padding: 0px;
        color: windowtext;
        font-size: x-large;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
    }
    .style2
    {
        padding: 0px;
        color: windowtext;
        font-size: 8.0pt;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: general;
        vertical-align: bottom;
        white-space: nowrap;
        border-left: .5pt solid windowtext;
        height: 1pt;
        border-right-style: none;
        border-right-color: inherit;
        border-right-width: medium;
        border-top-style: none;
        border-top-color: inherit;
        border-top-width: medium;
        border-bottom-style: none;
        border-bottom-color: inherit;
        border-bottom-width: medium;
    }
    .style3
    {
        border-style: none;
        border-color: inherit;
        border-width: medium;
        padding: 0px;
        color: windowtext;
        font-size: 8.0pt;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: general;
        vertical-align: bottom;
        white-space: nowrap;
        height: 1pt;
    }
    .style4
    {
        border-style: none;
        border-color: inherit;
        border-width: medium;
        padding: 0px;
        color: windowtext;
        font-size: 10.0pt;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial;
        text-align: general;
        vertical-align: bottom;
        white-space: nowrap;
        height: 1pt;
    }
    .style5
    {
        padding: 0px;
        color: windowtext;
        font-size: 5.0pt;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: general;
        vertical-align: bottom;
        border: .5pt solid windowtext;
        white-space: nowrap;
        height: 1pt;
    }
    .style6
    {
        height: 1pt;
    }
    .style7
    {
        padding: 0px;
        color: windowtext;
        font-size: 10.0pt;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial;
        text-align: general;
        vertical-align: bottom;
        white-space: nowrap;
        border-right: .5pt solid windowtext;
        height: 1pt;
        border-left-style: none;
        border-left-color: inherit;
        border-left-width: medium;
        border-top-style: none;
        border-top-color: inherit;
        border-top-width: medium;
        border-bottom-style: none;
        border-bottom-color: inherit;
        border-bottom-width: medium;
    }
    .style8
    {
        padding: 0px;
        color: windowtext;
        font-size: 8.0pt;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: left;
        vertical-align: bottom;
        white-space: nowrap;
        border-left: .5pt solid windowtext;
        height: 1pt;
        border-right-style: none;
        border-right-color: inherit;
        border-right-width: medium;
        border-top-style: none;
        border-top-color: inherit;
        border-top-width: medium;
        border-bottom-style: none;
        border-bottom-color: inherit;
        border-bottom-width: medium;
    }
    .style9
    {
        border-style: none;
        border-color: inherit;
        border-width: medium;
        padding: 0px;
        color: windowtext;
        font-size: 10.0pt;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        height: 1pt;
    }
    .style10
    {
        background-color: #FFFFFF;
    }
    .style12
    {
        padding: 0px;
        color: windowtext;
        font-size: 6.0pt;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: center-across;
        vertical-align: bottom;
        white-space: nowrap;
        border-top: .5pt solid windowtext;
        border-left-style: none;
        border-left-color: inherit;
        border-left-width: medium;
        border-right-style: none;
        border-right-color: inherit;
        border-right-width: medium;
        border-bottom-style: none;
        border-bottom-color: inherit;
        border-bottom-width: medium;
        background-color: #FFFFFF;
    }
    .style13
    {
        padding: 0px;
        color: windowtext;
        font-size: 8.0pt;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: center-across;
        vertical-align: bottom;
        white-space: nowrap;
        border-top: .5pt solid windowtext;
        border-left-style: none;
        border-left-color: inherit;
        border-left-width: medium;
        border-right-style: none;
        border-right-color: inherit;
        border-right-width: medium;
        border-bottom-style: none;
        border-bottom-color: inherit;
        border-bottom-width: medium;
        background-color: #FFFFFF;
    }
    .style14
    {
        padding: 0px;
        color: windowtext;
        font-size: 10.0pt;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial;
        text-align: left;
        vertical-align: bottom;
        white-space: nowrap;
        border-bottom: .5pt solid windowtext;
        border-left-style: none;
        border-left-color: inherit;
        border-left-width: medium;
        border-right-style: none;
        border-right-color: inherit;
        border-right-width: medium;
        border-top-style: none;
        border-top-color: inherit;
        border-top-width: medium;
    }
    -->
</style>
<form action="debt.php" method="post">
<table cellspacing="0" cellpadding="0" class="excel190">
  <col width="16" style="width:12pt;" />
  <col width="16" span="6" style="width:12pt;" />
  <col width="19" style="width:14pt;" />
  <col width="16" span="31" style="width:12pt;" />
  <col width="17" style="width:13pt;" />
  <tr style="height:20.25pt;">
    <td width="16" style="height:20.25pt;width:12pt;" align="left" valign="top"><img src="../../AppData/Roaming/Adobe/Dreamweaver CS6/en_US/OfficeImageTemp/clip_image002_0040.png" alt="" width="79" height="95" />
      <table cellpadding="0" cellspacing="0">
        <tr>
          <td class="excel339" width="16" style="height:20.25pt;width:12pt;"><a name="RANGE!A1:AN70" id="RANGE!A1:AN70">&nbsp;</a></td>
        </tr>
      </table></td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="19" style="width:14pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel337" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel216">&nbsp;</td>
  </tr>
  <tr style="height:20.25pt;">
    <td class="excel348" style="height:20.25pt;">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="24" rowspan="2" class="style1"><u>BAS DEBT TAKE-ON AND AMENDMENT</u></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel274" style="height:12.75pt;">&nbsp;</td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel274" style="height:12.75pt;">&nbsp;</td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel274" style="height:12.75pt;">&nbsp;</td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel226"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel253">&nbsp;</td>
    <td class="excel253">&nbsp;</td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td>&nbsp;</td>
       <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="8" class="excel310" style="border-right:.5pt solid black;height:12.75pt;">Department Name</td>
    <td colspan="19" >
        :<u><?php echo "$department"; ?></u></td>
    <td >&nbsp;</td>
    <td colspan="12" 
           style="border-right:.5pt solid black;">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" colspan="3" style="height:12.75pt;">Office</td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td colspan="19">
        :<u><?php echo "$office"; ?></u></td>
    <td >&nbsp;</td>
    <td  colspan="4" class="style10">&nbsp;</td>
    <td class="style13" style="border-top:none;">&nbsp;</td>
    <td class="style12" style="border-top:none;">&nbsp;</td>
    <td colspan="6" style="border-right:.5pt solid black;">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel274" style="height:12.75pt;">&nbsp;</td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel235"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel235"></td>
    <td class="excel235"></td>
    <td class="excel235"></td>
    <td class="excel235"></td>
    <td class="excel235"></td>
    <td class="excel225"></td>
    <td ">&nbsp;</td>
    <td  colspan="5" class="style10">&nbsp;</td>
    <td class="excel239"></td>
    <td colspan="11" class="excel425" style="border-right:.5pt solid black;">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" colspan="5" style="height:12.75pt;">Update Type</td>
    <td class="excel228"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    
    <td class="excel345">
        <input id="Take on Debt " name="R1" type="radio" <?php if($update_type == 'Take on Debt') {echo "checked";} ?>   /></td>
    <td class="excel228" colspan="5">Take on Debt</td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel242">
        <input id="Amendment " name="R1" type="radio" <?php if($update_type == 'Ammendment') {echo "checked";} ?> /></td>
    <td class="excel228" colspan="5">Amendment</td>
    <td class="excel228"></td><td class="excel225"></td>
    <td class="excel225"></td>
    <td >&nbsp;</td>
    <td class="excel239"></td>
    <td colspan="11" class="excel425" style="border-right:.5pt solid black;">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" style="height:12.75pt;">&nbsp;</td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel228"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel228"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td  colspan="5">&nbsp;</td>
    <td class="excel239"></td>
    <td colspan="6" class="excel425" style="border-right:.5pt solid black;">&nbsp;</td>
  </tr>
  <tr>
    <td class="style2" colspan="8">Debt Agreement Type</td>
    
    <td class="style5">
        <input id="Normal " name="R2" type="radio" <?php if($debt_agree_type == 'Normal') {echo "checked";} ?> /></td>
    <td class="style3" colspan="3">Normal</td>
    <td class="style4"></td>
    <td class="style4"></td>
    <td class="style4"></td>
    <td class="style4"></td>
    <td class="style4"></td>
    <td class="style4"></td>
    <td class="style5">
        <input id="Third Party " name="R2" type="radio" <?php if($debt_agree_type == 'Third Party') {echo "checked";} ?> /></td>
    <td class="style3" colspan="5">Third Party</td>
    <td class="style6"></td><td class="style3"></td>
    <td class="style4"></td>
    <td ></td>
    <td  colspan="6">&nbsp;</td>
    <td colspan="6" class="style9" style="border-right:.5pt solid black;"></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" style="height:12.75pt;">&nbsp;</td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel225"></td>
    <td class="excel244"></td>
    <td class="excel228"></td>
    <td></td>
    <td></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel244"></td>
    <td class="excel228"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td >&nbsp;</td>
  <td></td>
   <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel11" style="border-top:none;">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="27" class="excel353" style="border-right:.5pt solid black;height:12.75pt;">Debtor Information</td>
    <td >&nbsp;</td>
    <td class="excel269" colspan="12" ></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" colspan="6" style="height:12.75pt;">Debtor Number</td>
    <td colspan="21"><input id="Text2" type="text" /><td class="excel274" colspan="12" ></td>
        :<u><?php echo "$debt_no1"; ?></u></td>
    <td class="excel197">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" colspan="3" style="height:12.75pt;">Name</td>
    <td class="excel228"></td>
    <td class="excel259"></td>
    <td class="excel228"></td>
    <td colspan="21">
        :<u><?php echo "$debt_name"; ?></u></td>
    <td </td>
   <td class="excel269" colspan="12"></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" colspan="4" style="height:12.75pt;">Address</td>
    <td class="excel259"></td>
    <td class="excel228"></td>
    <td colspan="21">
        <textarea id="Address" placeholder="<?php echo "$debt_address"; ?>"></textarea></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel238"></td>
    <td class="excel238"></td>
    <td class="excel239"></td>
    <td class="excel267"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" colspan="5" style="height:12.75pt;">Debt Number</td>
    <td class="excel228"></td>
    <td colspan="10" >
        :<u><?php echo "$debt_no2"; ?></u></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel259"></td>
    <td class="excel259"></td>
    <td class="excel259"></td>
    <td class="excel259"></td>
    <td class="excel259"></td>
    <td class="excel259"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel259"></td>
    <td class="excel259"></td>
    <td class="excel259"></td>
    <td class="excel259"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel225"></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel274" style="height:12.75pt;">&nbsp;</td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel259"></td>
    <td class="excel259"></td>
    <td class="excel259"></td>
    <td class="excel259"></td>
    <td class="excel259"></td>
    <td class="excel259"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel259"></td>
    <td class="excel259"></td>
    <td class="excel259"></td>
    <td class="excel259"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel225"></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="40" class="excel351" style="border-right:.5pt solid black;height:12.75pt;">
        Debt Agreement Detailsnt Details</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" colspan="5" style="height:12.75pt;">Date Originated</td>
    <td></td>
    <td class="excel225"></td>
    <td colspan="10" class="excel397">
        :<u><?php echo "$date_originated"; ?></u></td>
    <td colspan="6"><font class="font5"></font></td>
    <td></td>
    <td></td>
    <td colspan="2"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" colspan="4" style="height:12.75pt;">Debt Type</td>
    <td class="excel228"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    
    <td colspan="10">
        :<u><?php echo "$debt_type1"; ?></u></td><td class="excel225"></td>
    <td colspan="21">&nbsp;</td>   <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" colspan="7" style="height:12.75pt;">Review    Date  (if applicable)</td>
    <td colspan="10" </td>
        :<u><?php echo "$review_date"; ?></u><td class="excel225">
          &nbsp;</td>
    <td colspan="9"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td> <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" colspan="7" style="height:12.75pt;">Print Statements</td>
   
    <td class="excel335" style="border-top:none;">
        <input id="Monthly"	name="R3" type="radio" <?php if($statement == 'Monthly') {echo "checked";} ?> /></td>
    <td class="excel228" colspan="4">Monthly</td>
    <td class="excel276" style="border-top:none;">
        <input id="None" name="R3" type="radio" <?php if($statement == 'None') {echo "checked";} ?> /></td>
    <td class="excel228" colspan="3">None</td>
    <td class="excel225"></td> <td class="excel228"></td>
    <td></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel274" style="height:12.75pt;">&nbsp;</td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" colspan="7" style="height:12.75pt;">Reference Number</td>
    <td class="excel225"></td>
    <td colspan="15">
        :<u><?php echo "$reference_no"; ?></u></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" colspan="7" style="height:12.75pt;">Debt Description</td>
    <td class="excel225"></td>
    <td colspan="31">
        :<u><?php echo "$debt_description"; ?></u></td>  <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel274" style="height:12.75pt;">&nbsp;</td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="40" class="excel351" style="border-right:.5pt solid black;height:12.75pt;">
        Debt Transaction Details</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" colspan="5" style="height:12.75pt;">Book    Years</td>
    <td class="excel228"></td>
    <td class="excel278">
        <input id="Current Year " name="R4" type="radio" <?php if($book_years == 'Current Year') {echo "checked";} ?> /></td>
    <td class="excel228" colspan="5">Current Year</td>
    <td class="excel225"></td>
    <td class="excel257">
        <input id="Previous Year (Open)" name="R4" type="radio" <?php if($book_years == 'Previous Year (Open)') {echo "checked";} ?> /></td>
    <td class="excel228" colspan="8">Previous Year (Open)</td>
    <td class="excel259"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel259"></td>
    <td class="excel257">
        <input id="Previous Year (Closed)" name="R4" type="radio" <?php if($book_years == 'Previous Year (Closed)') {echo "checked";} ?> /></td>
    <td class="excel228" colspan="9">Previous Year (Closed)</td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel18">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel281" style="height:12.75pt;">&nbsp;</td>
    <td class="excel283">&nbsp;</td>
    <td class="excel283">&nbsp;</td>
    <td class="excel283">&nbsp;</td>
    <td class="excel283">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel272" style="border-top:none;">
        <input id="Radio4" name="R4" type="radio" <?php if($book_years == 'V1') {echo "checked";} ?> /></td>
    <td class="excel284" colspan="8">Recoverable Revenue</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel286">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel286">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel286">&nbsp;</td>
    <td class="excel286">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel286">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel176">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="8" class="excel414" style="border-right:.5pt solid black;height:12.75pt;">SEGMENT TYPE</td>
    <td colspan="32" class="excel442" style="border-right:.5pt solid black;border-left:none;">SEGMENT DETAIL</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="8" class="excel416" style="height:12.75pt;">FUND</td>
    <td colspan="31" class="excel317">
        :<u><?php echo "$fund"; ?></u></td>    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="8" class="excel331" style="height:12.75pt;">OBJECTIVE</td>
    <td colspan="31" class="excel317">
        :<u><?php echo "$objective"; ?></u></td>    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel331" colspan="4" style="height:12.75pt;">PROJECT</td>
    <td class="excel333"></td>
    <td class="excel332"></td>
    <td></td>
    <td class="excel225"></td>
    <td colspan="31" class="excel317">
        :<u><?php echo "$project"; ?></u><td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="8" class="excel331" style="height:12.75pt;">NET ASSETS</td>
    <td colspan="31" class="excel317">
        :<u><?php echo "$net_assets"; ?></u></td> <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="8" class="excel331" style="height:12.75pt;">REGIONAL    IDENTIFIER</td>
    <td colspan="31" class="excel317">
        :<u><?php echo "$regional_id"; ?></u></td>   <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="8" class="excel331" style="height:12.75pt;">RESPONSIBILITY</td>
    <td colspan="31" class="excel317">
        :<u><?php echo "$responsibility"; ?></u></td>   <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="8" class="excel331" style="height:12.75pt;">ITEM</td>
    <td colspan="31" class="excel317">
        :<u><?php echo "$item"; ?></u></td>   <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="8" class="excel85" style="height:12.75pt;">MATCHING FIELD1</td>
    <td colspan="31" class="excel317">
        :<u><?php echo "$matching_field1"; ?></u></td>   <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="8" class="excel331" style="height:12.75pt;">MATCHING FIELD2</td>
    <td colspan="31" class="excel317">
        :<u><?php echo "$matching_field2"; ?></u></td>   <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="8" class="excel404" style="height:12.75pt;">MATCHING FIELD3</td>
    <td colspan="31" class="style14">
        :<u><?php echo "$matching_field3"; ?></u></td>   <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel274" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel225"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="13" class="excel445" style="border-right:.5pt solid black;">Rand</td>
    <td colspan="2" class="excel440" style="border-left:none;">&nbsp;</td>
    <td class="excel45">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel297" style="height:12.75pt;">&nbsp;</td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel228"></td>
    <td></td>
    <td></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td></td>
    <td class="excel228"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="7" class="excel382">Debt  Amount</td>
    <td></td>
    <td class="excel298"></td>
    <td class="excel298"></td>
    <td colspan="16" class="excel399" 
          style="border-right:.5pt solid black; text-align: left;">
        R:<u><?php echo "$debt_amount"; ?></u></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel297" style="height:12.75pt;">&nbsp;</td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel228"></td>
    <td></td>
    <td></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td></td>
    <td class="excel228"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="8" class="excel382">Allocation Percentage</td>
    <td class="excel298"></td>
    <td class="excel298"></td>
    <td class="excel298"></td>
    <td class="excel298"></td>
    <td class="excel298"></td>
    <td class="excel298"></td>
    <td class="excel298"></td>
    <td class="excel298"></td>
    <td class="excel298"></td>
    <td class="excel298"></td>
    <td class="excel298"></td>
    <td class="excel298"></td>
    <td class="excel298"></td>
    <td class="excel298"></td>
    <td colspan="3" class="excel401" style="border-right:.5pt solid black;">
      :<u><?php echo "$allocation_percent"; ?></u></td>
    <td class="excel17" style="border-left:none;">%</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel274" style="height:12.75pt;">&nbsp;</td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="40" class="excel351" style="border-right:.5pt solid black;height:12.75pt;">
        Debt Repayment Details</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="9" class="excel392" style="border-right:.5pt solid black;height:12.75pt;">Interest Rate :</td>
    <td class="excel270" style="border-top:none;border-left:none;">
        <input id="Fixed" name="R5" type="radio" <?php if($interest_rate == 'Fixed') {echo "checked";} ?> /></td>
    <td colspan="6" class="excel395" style="border-right:.5pt solid black;border-left:none;">
        Fixed</td>
    <td class="excel311" style="border-top:none;border-left:none;">
        <input id="Prescribed " name="R5" type="radio" <?php if($book_years == 'Prescribed') {echo "checked";} ?> /></td>
    <td colspan="11" class="excel392" style="border-left:none;">Prescribed</td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td>&nbsp;</td>
    <td >&nbsp;</td>
    <td colspan="4" >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td ">&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td class="excel261" style="border-top:none;">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="9" class="excel310" style="border-right:.5pt solid black;height:12.75pt;">
        Addendum Effective Date</td>
    <td colspan="10" >
        :<u><?php echo "$addendum_date"; ?></u></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228" colspan="7">Interest Start Date</td>
    <td colspan="2">
        :<u><?php echo "$interest_date"; ?></u></td>
        <td></td><td></td><td></td><td></td><td></td><td></td><td></td> 
      <td class="excel18">&nbsp;</td>
    
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" style="height:12.75pt;">&nbsp;</td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel238" colspan="5"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel302"></td>
    <td class="excel228"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel228"></td>
    <td class="excel259" colspan="5"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel18">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" colspan="5" style="height:12.75pt;">Installment</td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228">R</td>
    <td colspan="13">
        :<u><?php echo "$installment"; ?></u></td>
    
    <td class="excel228"></td>
    <td colspan="7" class="excel382" style="border-right:.5pt solid black;">Persal 
        Deduction</td>
	<td colspan="9">
        :<u><?php echo "$persal_deduction"; ?></u></td>
    <td class="excel18">&nbsp;</td>
    
    
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" style="height:12.75pt;">&nbsp;</td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel18">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel306" colspan="3" style="height:12.75pt;">Region</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel284">&nbsp;</td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel259"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel228"></td>
    <td class="excel18">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td colspan="10" class="excel355" style="border-right:.5pt solid black;height:13.5pt;">Compiled By</td>
    <td colspan="10" class="excel387" style="border-left:none;">Checked and Verified By</td>
    <td colspan="10" class="excel387" style="border-left:none;">Expenditure Authorised 
        by</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="10" class="excel384" style="border-right:.5pt solid black;height:12.75pt;">
        <u><?php echo "$compiled_by"; ?></u></td>
    <td colspan="10" class="excel384" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$checked_by"; ?></u></td>
    <td colspan="10" class="excel384" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$authorised_by"; ?></u></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel325" style="height:13.5pt;">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel327">&nbsp;</td>
    <td class="excel325" style="border-left:none;">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel327">&nbsp;</td>
    <td class="excel325" style="border-left:none;">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel326">&nbsp;</td>
    <td class="excel327">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="10" class="excel358" style="border-right:.5pt solid black;height:12.75pt;">Rank</td>
    <td colspan="10" class="excel358" style="border-right:.5pt solid black;border-left:none;">Rank</td>
    <td colspan="10" class="excel358" style="border-right:.5pt solid black;border-left:none;">Rank</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="10" class="excel371" style="border-right:.5pt solid black;height:12.75pt;">
        <u><?php echo "$rank1"; ?></u></td>
    <td colspan="10" class="excel375" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$rank2"; ?></u></td>
    <td colspan="10" class="excel371" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$rank3"; ?></u></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel319"></td>
    <td></td>
    <td></td>
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel323" style="height:13.5pt;">&nbsp;</td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel328">&nbsp;</td>
    <td class="excel323" style="border-left:none;">&nbsp;</td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel328">&nbsp;</td>
    <td class="excel323" style="border-left:none;">&nbsp;</td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel324"></td>
    <td class="excel328">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td colspan="10" class="excel355" style="border-right:.5pt solid black;height:13.5pt;">Signature</td>
    <td colspan="10" class="excel355" style="border-right:.5pt solid black;border-left:none;">Signature</td>
    <td colspan="10" class="excel355" style="border-right:.5pt solid black;border-left:none;">Signature</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel313"></td>
    <td></td>
    <td></td>
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="10" class="excel371" style="border-right:.5pt solid black;height:12.75pt;">
        <u><?php echo "$signature1"; ?></u></td>
    <td colspan="10" class="excel371" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$signature3"; ?></u></td>
    <td colspan="10" class="excel371" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$signature3"; ?></u></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel329" style="height:13.5pt;">&nbsp;</td>
    <td class="excel322">&nbsp;</td>
    <td class="excel330">&nbsp;</td>
    <td class="excel322">&nbsp;</td>
    <td class="excel322">&nbsp;</td>
    <td class="excel322">&nbsp;</td>
    <td class="excel330">&nbsp;</td>
    <td class="excel330">&nbsp;</td>
    <td class="excel330">&nbsp;</td>
    <td class="excel334">&nbsp;</td>
    <td class="excel329" style="border-left:none;">&nbsp;</td>
    <td class="excel322">&nbsp;</td>
    <td class="excel330">&nbsp;</td>
    <td class="excel322">&nbsp;</td>
    <td class="excel322">&nbsp;</td>
    <td class="excel322">&nbsp;</td>
    <td class="excel330">&nbsp;</td>
    <td class="excel330">&nbsp;</td>
    <td class="excel330">&nbsp;</td>
    <td class="excel334">&nbsp;</td>
    <td class="excel329" style="border-left:none;">&nbsp;</td>
    <td class="excel322">&nbsp;</td>
    <td class="excel330">&nbsp;</td>
    <td class="excel322">&nbsp;</td>
    <td class="excel322">&nbsp;</td>
    <td class="excel322">&nbsp;</td>
    <td class="excel330">&nbsp;</td>
    <td class="excel330">&nbsp;</td>
    <td class="excel330">&nbsp;</td>
    <td class="excel334">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td colspan="10" class="excel361" style="border-right:.5pt solid black;height:13.5pt;">Date <font class="font6"></font></td>
    <td colspan="10" class="excel361" style="border-right:.5pt solid black;border-left:none;">Date<font class="font6"></font></td>
    <td colspan="10" class="excel361" style="border-right:.5pt solid black;border-left:none;">Date<font class="font6"></font></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:15.0pt;">
    <td colspan="10" class="excel367" style="border-right:.5pt solid black;height:15.0pt;">
        <u><?php echo "$date1"; ?></u></td>
    
    <td colspan="10" class="excel367" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$date2"; ?></u></td>
    
    <td colspan="10" class="excel365" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$date3"; ?></u></td>
    
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel310" style="height:12.75pt;">&nbsp;</td>
    <td class="excel238"></td>
    <td class="excel238"></td>
    <td class="excel238"></td>
    <td class="excel293"></td>
    <td class="excel296"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel225"></td>
    <td class="excel244"></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="37" rowspan="3" class="excel370" dir="ltr" width="595" style="height:38.25pt;width:446pt;">IF MORE ALLOCATION LINES REQUIRED,    COMPLETE ALLOCATION ATTACHMENT. PLEASE SPECIFY NUMBER OF ATTACHED PAGES    (EXCLUDING THIS PAGE)</td>
    <td class="excel225"></td>
    <td class="excel244"></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel225" style="height:12.75pt;"></td>
    <td class="excel244"></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel225" style="height:12.75pt;"></td>
    <td class="excel244"></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel289" style="height:12.75pt;">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel336">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel253">&nbsp;</td>
    <td class="excel253">&nbsp;</td>
    <td class="excel253">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel253">&nbsp;</td>
    <td class="excel253">&nbsp;</td>
    <td class="excel253">&nbsp;</td>
    <td class="excel253">&nbsp;</td>
    <td class="excel253">&nbsp;</td>
    <td class="excel253">&nbsp;</td>
    <td class="excel253">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel336">&nbsp;</td>
    <td class="excel253">&nbsp;</td>
    <td class="excel291">&nbsp;</td>
    <td class="excel45">&nbsp;</td>
  </tr>
</table>
<input type="submit" name="submit" value="submit">
</form>

</BODY>
</HTML>
