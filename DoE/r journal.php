<?php

if(isset($_REQUEST['submit'])) {
	
	$id = $_GET['search'] ;
	
	
	mysql_connect ("localhost", "root", "") or die ("connection failed");
	mysql_select_db("test");
	
	$query ="SELECT * FROM journal WHERE id='$id'";
	
	if($query === FALSE) {
		echo "didn't search";   // die(mysql_error());		
 
	}
	
	$query=mysql_query($query);
	$num = mysql_num_rows($query);
	
	if($num==0)
		{
			header('location: s journal.html ');
			
			//echo "<h3>no results found</h3>";
		}
		else
		{
	while ($rec = mysql_fetch_array($query, MYSQL_ASSOC)){
	
							$id1					= $rec["id"];
							$department				= $rec["department"];
							$office					= $rec["office"];
							$journal_description	= $rec["journal_description"];
							$posting_date			= $rec["posting_date"];
							$total_debit		 	= $rec["total_debit"];
							$total_credit 			= $rec["total_credit"];
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
							$compiled_by			= $rec["compiled_by"];
							$checked_by				= $rec["checked_by"];
							$authorised_by			= $rec["authorised_by"];
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

		}
	}
?>




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
.excel57 {
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
.excel58 {
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
.excel9 {
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
.excel107 {
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
.excel54 {
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
.excel106 {
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
.excel60 {
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
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel48 {
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
.excel15 {
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
.excel36 {
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
.excel35 {
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
.excel29 {
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
.excel158 {
    border-style: none;
        border-color: inherit;
        border-width: medium;
        padding: 0px;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
text-align:left;
        vertical-align:bottom;
        white-space:nowrap;
}
.excel55 {
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
.excel122 {
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
.excel4 {
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
.excel6 {
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
.excel7 {
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
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel8 {
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
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel159 {
    border-style: none;
        border-color: inherit;
        border-width: medium;
        padding: 0px;
        color:windowtext;
        font-size:10.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
text-align:left;
        vertical-align:bottom;
        white-space:nowrap;
}
.excel110 {
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
.excel10 {
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
.excel12 {
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
.excel13 {
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
border-top:none;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
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
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel113 {
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
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel16 {
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
border-top:.5pt hairline windowtext;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
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
border-top:.5pt hairline windowtext;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel24 {
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
.excel39 {
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
.excel18 {
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
border-top:.5pt hairline windowtext;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel111 {
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
border-bottom:none;
border-left:none;
}
.excel168 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Calibri, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
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
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel20 {
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
.excel21 {
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
.excel22 {
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
.excel23 {
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
.excel112 {
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
.excel108 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel53 {
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
}
.font6 {
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
}
.excel19 {
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
.excel26 {
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
.excel61 {
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
.excel27 {
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
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel28 {
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
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel74 {
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
.excel114 {
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
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel31 {
padding:0px;
color:windowtext;
font-size:7.5pt;
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
.excel64 {
padding:0px;
color:windowtext;
font-size:7.5pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel49 {
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
}
.excel109 {
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
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel153 {
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
.excel148 {
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
.excel65 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel154 {
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
.excel47 {
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
.excel160 {
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
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel123 {
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
.excel84 {
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
.excel90 {
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
.excel91 {
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
.excel92 {
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
.excel95 {
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
border-left:.5pt solid windowtext;
}
.excel94 {
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
.excel93 {
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
.excel80 {
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
.excel81 {
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
.excel103 {
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
.excel97 {
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
.excel40 {
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
.excel150 {
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
border-left:.5pt solid windowtext;
}
.excel96 {
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
.excel98 {
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
.excel82 {
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
.excel42 {
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
.excel147 {
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
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel133 {
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
.excel99 {
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
.excel101 {
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
.excel100 {
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
.excel41 {
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
.excel164 {
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
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel43 {
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
.excel44 {
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
.excel117 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel105 {
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
.excel45 {
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
.excel51 {
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
.excel38 {
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
.excel56 {
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
border-left:none;
}
.excel66 {
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
.excel67 {
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
.excel68 {
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
.excel46 {
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
}
.font7 {
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:italic;
text-decoration:none;
font-family:Arial, sans-serif;
}
.font5 {
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
}
.excel136 {
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
.excel83 {
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
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel86 {
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
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel85 {
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
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel87 {
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
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel37 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel119 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel118 {
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
border-left:none;
}
.excel69 {
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
border-left:none;
}
.excel124 {
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
.excel140 {
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
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel115 {
padding:0px;
color:windowtext;
font-size:8.0pt;
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
.excel76 {
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
.excel77 {
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
.excel75 {
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
.excel127 {
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
.excel63 {
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
.excel143 {
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
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel71 {
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
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel70 {
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
}
.excel78 {
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
.excel73 {
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
.excel62 {
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
.excel102 {
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
.excel72 {
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
.excel79 {
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
.excel104 {
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
.excel130 {
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
.font8 {
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:"Arial Narrow", sans-serif;
}
.excel131 {
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
.font9 {
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Black", sans-serif;
}
.excel157 {
padding:0px;
color:black;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:normal;
}
.excel59 {
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
.excel25 {
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
    #Text1
    {
        width: 349px;
    }
    #FUND
    {
        width: 650px;
    }
    #FUND0
    {
        width: 624px;
    }
    #OBJECTIVE
    {
        width: 650px;
    }
    #OBJECTIVE0
    {
        width: 626px;
    }
    #PROJECT
    {
        width: 650px;
    }
    #PROJECT0
    {
        width: 626px;
    }
    #FUND0
    {
        width: 650px;
    }
    #OBJECTIVE0
    {
        width: 650px;
    }
    #PROJECT0
    {
        width: 650px;
    }
    #Text2
    {
        width: 650px;
    }
    #Text3
    {
        width: 350px;
    }
    #Text4
    {
        width: 221px;
    }
    #Rank
    {
        width: 226px;
    }
    #Rank0
    {
        width: 160px;
    }
    #Rank1
    {
        width: 162px;
    }
    #Rank2
    {
        width: 152px;
    }
    #Signature
    {
        width: 222px;
    }
    #Signature0
    {
        width: 158px;
    }
    #Signature1
    {
        width: 160px;
    }
    #Signature2
    {
        width: 152px;
    }
    .style1
    {
        padding: 0px;
        color: windowtext;
        font-size: 8.0pt;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: left;
        vertical-align: bottom;
        white-space: nowrap;
        border-left: .5pt solid windowtext;
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
    .style2
    {
        padding: 0px;
        color: windowtext;
        font-size: 8.0pt;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: left;
        vertical-align: bottom;
        white-space: nowrap;
        border-top: .5pt solid windowtext;
        border-left: .5pt solid windowtext;
        border-right-style: none;
        border-right-color: inherit;
        border-right-width: medium;
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
        font-size: xx-large;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
    }
    -->
</style>
<form action="journal.php" method="POST">

<table cellspacing="0" cellpadding="0" class="excel1">
  <col width="16" span="6" style="width:12pt;" />
  <col width="18" style="width:14pt;" />
  <col width="16" span="32" style="width:12pt;" />
  <tr style="height:12.75pt;">
    <td width="16" style="height:12.75pt;width:12pt;" align="left" valign="top">&nbsp;<table cellpadding="0" cellspacing="0">
        <tr>
          <td class="excel57" width="16" style="height:12.75pt;width:12pt;"><a name="RANGE!A1:AM67" id="RANGE!A1:AM67">&nbsp;</a></td>
        </tr>
      </table></td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="18" style="width:14pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel58" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel9" width="16" style="width:12pt;">&nbsp;</td>
  </tr>
  <tr style="height:20.25pt;">
    <td class="excel107" style="height:20.25pt;">&nbsp;</td>
    <td class="excel54"></td>
    <td class="excel54"></td>
    <td class="excel54"></td>
    <td class="excel54"></td>
    <td class="excel54"></td>
    <td colspan="31" class="style3">GENERAL JOURNALS</td>
    <td class="excel54"></td>
    <td class="excel106">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel60" style="height:12.75pt;">&nbsp;</td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
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
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel60" style="height:12.75pt;">&nbsp;</td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
    <td class="excel48"></td>
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
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel36" style="height:12.75pt;">&nbsp;</td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel35">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel29" colspan="7" style="height:12.75pt;">Department    Name</td>
    <td colspan="19" class="excel158">
        :<u><?php echo "$department"; ?></u></td>
    <td>&nbsp;</td>
    <td  class="excel35" colspan="12"> </td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel29" colspan="3" style="height:12.75pt;">Office</td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td colspan="19" class="excel159">
        :<u><?php echo "$office"; ?></u></td>
    <td >&nbsp;</td>
    <td  colspan="5">&nbsp;</td>
    <td class="excel12"></td>
    <td class="excel13">&nbsp;</td>
    <td class="excel14">&nbsp;</td>
    <td class="excel14">&nbsp;</td>
    <td class="excel14">&nbsp;</td>
    <td class="excel13">&nbsp;</td>
    <td class="excel113">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel29" colspan="7" style="height:12.75pt;">Journal    Description</td>
    <td colspan="19" class="excel159">
        :<u><?php echo "$journal_description"; ?></u></td>
    <td >&nbsp;</td>
    <td colspan="5">&nbsp;</td>
    <td class="excel12"></td>
    <td class="excel16" style="border-top:none;">&nbsp;</td>
    <td class="excel17" style="border-top:none;">&nbsp;</td>
    <td class="excel17" style="border-top:none;">&nbsp;</td>
    <td class="excel17" style="border-top:none;">&nbsp;</td>
    <td class="excel16" style="border-top:none;">&nbsp;</td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel29" colspan="5" style="height:12.75pt;">Posting    Date</td>
    <td></td>
    <td></td>
    <td colspan="10">
        :<u><?php echo "$posting_date"; ?></u></td>
    <td class="excel52"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td>&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td class="excel111">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel36" style="height:12.75pt;">&nbsp;</td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel108"></td>
    <td class="excel108"></td>
    <td class="excel108"></td>
    <td class="excel53"></td>
    <td class="excel108"></td>
    <td class="excel108"></td>
    <td class="excel108"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel111" colspan="12">
        &nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel36" style="height:12.75pt;">&nbsp;</td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel64"></td>
    <td class="excel49"></td>
    <td class="excel49"></td>
    <td class="excel64"></td>
    <td class="excel64"></td>
    <td class="excel64"></td>
    <td class="excel64"></td>
    <td class="excel64"></td>
    <td class="excel49"></td>
    <td class="excel49"></td>
    <td class="excel49"></td>
    <td class="excel109">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="8" class="excel153" style="height:12.75pt;"><u>Total Debit Amount</u></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel2"></td>
    <td colspan="18" class="excel148" style="border-right:.5pt solid black;"><u>Total    Credit Amount</u></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel65" style="height:12.75pt;border-top:none;">R</td>
    <td colspan="16">
        :<u><?php echo "$total_debit"; ?></u></td>
    <td class="excel47"></td>
    <td class="excel47"></td>
    <td class="excel47"></td>
    <td class="excel47"></td>
    <td class="excel47"></td>
    <td class="excel65">R</td>
    <td colspan="16">
        :<u><?php echo "$total_credit"; ?></u></td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="39" class="excel123" style="border-right:.5pt solid black;height:12.75pt;">*Debit and credit amounts should be equal.</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel29" style="height:12.75pt;">&nbsp;</td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel35">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="39" class="excel123" style="border-right:.5pt solid black;height:12.75pt;">Allocation Detail</td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel84" colspan="2" style="height:13.5pt;border-right:.5pt solid black;">SEGMENT TYPE</td>
    <td class="excel90" style="border-top:none;border-left:none;">&nbsp;</td>
    <td class="excel91" style="border-top:none;">&nbsp;</td>
    <td class="excel92" style="border-top:none;">&nbsp;</td>
    <td class="excel92" style="border-top:none;">&nbsp;</td>
    <td class="excel92" style="border-top:none;">&nbsp;</td>
    <td class="excel95" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td colspan="6" class="excel94" align="center">SEGMENT    DETAIL</td>
    <td class="excel93" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel80" style="border-top:none;">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel81" colspan="2" style="height:13.5pt;">FUND</td>
    <td class="excel103"></td>
    <td class="excel97"></td>
    <td class="excel103"></td>
    <td class="excel103"></td>
    <td class="excel40"></td>
    <td colspan="32" class="style2" style="border-right:.5pt solid black;">
        :<u><?php echo "$fund"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel96" colspan="4" style="height:13.5pt;">OBJECTIVE</td>
    <td class="excel98"></td>
    <td class="excel82"></td>
    <td class="excel42"></td>
    <td colspan="32" class="style1" style="border-right:.5pt solid black;">
        :<u><?php echo "$objective"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel96" colspan="4" style="height:13.5pt;">PROJECT</td>
    <td class="excel98"></td>
    <td class="excel97"></td>
    <td></td>
    <td colspan="32" class="excel96" style="border-right:.5pt solid black;">
       :<u><?php echo "$project"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel96" colspan="4" style="height:13.5pt;">NET    ASSETS</td>
    <td class="excel98"></td>
    <td class="excel97"></td>
    <td></td>
    <td colspan="32" class="excel96" style="border-right:.5pt solid black;">
        :<u><?php echo "$net_assets"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel96" colspan="4" style="height:13.5pt;">REGIONAL    IDENTIFIER</td>
    <td class="excel98"></td>
    <td class="excel97"></td>
    <td></td>
    <td colspan="32" class="excel96" style="border-right:.5pt solid black;">
        :<u><?php echo "$regional_id"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel96" colspan="4" style="height:13.5pt;">RESPONSIBILITY</td>
    <td class="excel98"></td>
    <td class="excel97"></td>
    <td></td>
    <td colspan="32" class="excel96" style="border-right:.5pt solid black;">
        :<u><?php echo "$responsibility"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel96" colspan="2" style="height:13.5pt;">ITEM</td>
    <td class="excel97"></td>
    <td class="excel97"></td>
    <td class="excel98"></td>
    <td class="excel97"></td>
    <td></td>
    <td colspan="32" class="excel96" style="border-right:.5pt solid black;">
        :<u><?php echo "$item"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel96" colspan="4" style="height:13.5pt;">MATCHING    FIELD1</td>
    <td class="excel98"></td>
    <td class="excel97"></td>
    <td></td>
    <td colspan="32" class="excel96" style="border-right:.5pt solid black;">
        :<u><?php echo "$matching_field1"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel96" colspan="4" style="height:13.5pt;">MATCHING    FIELD2</td>
    <td class="excel98"></td>
    <td class="excel97"></td>
    <td></td>
    <td colspan="32" class="excel96" style="border-right:.5pt solid black;">
        :<u><?php echo "$matching_field2"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel99" colspan="4" style="height:13.5pt;">MATCHING    FIELD3</td>
    <td class="excel101">&nbsp;</td>
    <td class="excel100">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td colspan="32" class="excel99" style="border-right:.5pt solid black;">
       :<u><?php echo "$matching_field3"; ?></u></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel36" style="height:12.75pt;">&nbsp;</td>
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
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel43" colspan="2">Rand</td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
     <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td ></td>
    <td class="excel35">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel44" style="height:13.5pt;">&nbsp;</td>
    <td class="excel2"></td>
    <td class="excel117">
        <input id="Radio2" name="R1" type="radio" value="Debit"<?php if($credit_or_debit == 'Debit') {echo "checked";} ?>  /></td>
    <td class="excel3" colspan="3">Debit</td>
    <td class="excel2"></td>
    <td class="excel105">
        <input id="Radio1" name="R1" type="radio" value="Credit" <?php if($credit_or_debit == 'Credit') {echo "checked";} ?> /></td>
    <td class="excel3" colspan="3">Credit</td>
    <td></td>
    <td>&nbsp;</td>
    <td class="excel3" colspan="7">Allocation Amount</td>
    <td></td>
    <td class="excel45"></td>
    <td class="excel45"></td>
    <td class="excel116">R</td>
    <td colspan="15" class="excel154" style="border-right:.5pt solid black;">
        :<u><?php echo "$allocation_amount"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel51" style="height:13.5pt;">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel38">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel67">&nbsp;</td>
    <td class="excel67">&nbsp;</td>
    <td class="excel67">&nbsp;</td>
    <td class="excel68">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel44" style="height:12.75pt;">&nbsp;</td>
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
    <td class="excel3"></td>
    <td></td>
    <td class="excel46"></td>
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
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel35">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="39" class="excel123" style="border-right:.5pt solid black;height:12.75pt;">Allocation<font class="font7"> </font><font class="font5">Detail</font></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel84" colspan="2" style="height:13.5pt;border-right:.5pt solid black;">SEGMENT TYPE</td>
    <td class="excel90" style="border-top:none;border-left:none;">&nbsp;</td>
    <td class="excel91" style="border-top:none;">&nbsp;</td>
    <td class="excel92" style="border-top:none;">&nbsp;</td>
    <td class="excel92" style="border-top:none;">&nbsp;</td>
    <td class="excel92" style="border-top:none;">&nbsp;</td>
    <td class="excel95" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td colspan="9" class="excel136">SEGMENT    DETAIL</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel94" style="border-top:none;">&nbsp;</td>
    <td class="excel80" style="border-top:none;">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel81" colspan="2" style="height:13.5pt;">FUND</td>
    <td class="excel103"></td>
    <td class="excel97"></td>
    <td class="excel103"></td>
    <td class="excel103"></td>
    <td></td>
    <td colspan="32" class="style2" style="border-right:.5pt solid black;">
        :<u><?php echo "$fund1"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel96" colspan="4" style="height:13.5pt;">OBJECTIVE</td>
    <td class="excel98"></td>
    <td class="excel82"></td>
    <td></td>
    <td colspan="32" class="style1" style="border-right:.5pt solid black;">
        :<u><?php echo "$objective1"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel96" colspan="4" style="height:13.5pt;">PROJECT</td>
    <td class="excel98"></td>
    <td class="excel97"></td>
    <td></td>
    <td colspan="32" class="excel96" style="border-right:.5pt solid black;">
       :<u><?php echo "$project1"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel96" colspan="4" style="height:13.5pt;">NET    ASSETS</td>
    <td class="excel98"></td>
    <td class="excel97"></td>
    <td></td>
    <td colspan="32" class="excel96" style="border-right:.5pt solid black;">
        :<u><?php echo "$net_assets1"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel96" colspan="4" style="height:13.5pt;">REGIONAL    IDENTIFIER</td>
    <td class="excel98"></td>
    <td class="excel97"></td>
    <td></td>
    <td colspan="32" class="excel96" style="border-right:.5pt solid black;">
        :<u><?php echo "$regional_id1"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel96" colspan="4" style="height:13.5pt;">RESPONSIBILITY</td>
    <td class="excel98"></td>
    <td class="excel97"></td>
    <td></td>
    <td colspan="32" class="excel96" style="border-right:.5pt solid black;">
        :<u><?php echo "$responsibility1"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel96" colspan="2" style="height:13.5pt;">ITEM</td>
    <td class="excel97"></td>
    <td class="excel97"></td>
    <td class="excel98"></td>
    <td class="excel97"></td>
    <td></td>
    <td colspan="32" class="excel96" style="border-right:.5pt solid black;">
        :<u><?php echo "$item1"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel96" colspan="4" style="height:13.5pt;">MATCHING    FIELD1</td>
    <td class="excel98"></td>
    <td class="excel97"></td>
    <td></td>
    <td colspan="32" class="excel96" style="border-right:.5pt solid black;">
        :<u><?php echo "$matching_field4"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel96" colspan="4" style="height:13.5pt;">MATCHING    FIELD2</td>
    <td class="excel98"></td>
    <td class="excel97"></td>
    <td></td>
    <td class="excel96"colspan="32" style="height:13.5pt;></td>
    <td class="excel82">
        :<u><?php echo "$matching_field5"; ?></u></td>
    
    
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel99" colspan="4" style="height:13.5pt;">MATCHING    FIELD3</td>
    <td class="excel101">&nbsp;</td>
    <td class="excel100">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel99"colspan="32" style="height:13.5pt>
        <input id="Text2" type="text" />
        :<u><?php echo "$matching_field6"; ?></u></td>
    
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel36" style="height:12.75pt;">&nbsp;</td>
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
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel43" colspan="2">Rand</td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td >&nbsp;</td>
    <td colspan="2"  style="border-left:none;">&nbsp;</td>
    <td class="excel35">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel44" style="height:13.5pt;">&nbsp;</td>
    <td class="excel2"></td>
    <td class="excel37">
        <input id="Debit" name="R2" type="radio" value="Debit" <?php if($credit_or_debit1 == 'Debit') {echo "checked";} ?> /></td>
    <td class="excel3" colspan="3">Debit</td>
    <td class="excel2"></td>
    <td class="excel119">
        <input id="Credit" name="R2" type="radio" value="Credit" <?php if($credit_or_debit1 == 'Credit') {echo "checked";} ?> /></td>
    <td class="excel3" colspan="3">Credit</td>
    <td>&nbsp;</td>
    <td></td>
    <td class="excel3" colspan="7">Allocation Amount</td>
    <td class="excel45"></td>
    <td class="excel45"></td>
    <td class="excel45"></td>
    <td class="excel118">R</td>
    <td colspan="15" class="excel154" style="border-right:.5pt solid black;">
        :<u><?php echo "$allocation_amount1"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel44" style="height:13.5pt;">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel38">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel69">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel66">&nbsp;</td>
    <td class="excel67">&nbsp;</td>
    <td class="excel67">&nbsp;</td>
    <td class="excel67">&nbsp;</td>
    <td class="excel68">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td colspan="10" class="excel124" style="border-right:.5pt solid black;height:13.5pt;">Compiled By</td>
    <td colspan="10" class="excel124" style="border-right:.5pt solid black;border-left:none;">
        Checked and Verified By</td>
    <td colspan="10" class="excel124" style="border-right:.5pt solid black;border-left:none;">
        Expenditure Authorised byhorised by</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td colspan="10" class="excel140" style="border-right:.5pt solid black;height:13.5pt;">
        <u><?php echo "$compiled_by"; ?></u></td>
    <td colspan="10" class="excel140" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$checked_by"; ?></u></td>
    <td colspan="10" class="excel140" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$authorised_by"; ?></u></td>
    <td align="left" valign="top"><img src="../../AppData/Roaming/Adobe/Dreamweaver CS6/en_US/OfficeImageTemp/clip_image004_0025.png" alt="" width="130" height="1" />
      <table cellpadding="0" cellspacing="0">
        <tr>
          <td width="16" style="height:13.5pt;width:12pt;"></td>
        </tr>
      </table></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="10" class="excel127" style="border-right:.5pt solid black;height:12.75pt;">Rank</td>
    <td colspan="10" class="excel127" style="border-right:.5pt solid black;border-left:none;">Rank</td>
    <td colspan="10" class="excel127" style="border-right:.5pt solid black;border-left:none;">Rank</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel63"></td>
    <td></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td colspan="10" class="excel143" style="border-right:.5pt solid black;height:13.5pt;">
        <u><?php echo "$rank1"; ?></u></td>
    <td colspan="10" class="excel143" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$rank2"; ?></u></td>
    <td colspan="10" class="excel143" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$rank3"; ?></u></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td colspan="10" class="excel124" style="border-right:.5pt solid black;height:13.5pt;">Signature</td>
    <td colspan="10" class="excel124" style="border-right:.5pt solid black;border-left:none;">Signature</td>
    <td colspan="10" class="excel124" style="border-right:.5pt solid black;border-left:none;">Signature</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td colspan="10" class="excel143" style="border-right:.5pt solid black;height:13.5pt;">
        <u><?php echo "$signature1"; ?></u></td>
    <td colspan="10" class="excel143" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$signature2"; ?></u></td>
    <td colspan="10" class="excel143" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$signature3"; ?></u></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td colspan="10" class="excel130" style="border-right:.5pt solid black;height:13.5pt;">Date <font class="font8"></font></td>
    <td colspan="10" class="excel130" style="border-right:.5pt solid black;border-left:none;">Date<font class="font8"></font></td>
    <td colspan="10" class="excel130" style="border-right:.5pt solid black;border-left:none;">Date<font class="font8"></font></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:15.0pt;">
    <td colspan="10" class="excel131" style="border-right:.5pt solid black;height:15.0pt;">
        <u><?php echo "$date1"; ?></u></td>
    <td colspan="10" class="excel131" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$date2"; ?></u></td>
    <td colspan="10" class="excel131" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$date3"; ?></u></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel44" style="height:12.75pt;">&nbsp;</td>
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
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel35">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel44" style="height:12.75pt;">&nbsp;</td>
    <td colspan="29" rowspan="3" class="excel157" dir="ltr" width="466" style="width:350pt;">IF    MORE ALLOCATION LINES REQUIRED, COMPLETE ALLOCATION ATTACHMENT. PLEASE    SPECIFY NUMBER OF ATTACHED PAGES (EXCLUDING THIS PAGE)</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel35">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel44" style="height:13.5pt;">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel15">&nbsp;</td>
  </tr>
  <tr style="height:12.0pt;">
    <td class="excel44" style="height:12.0pt;">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel59">&nbsp;</td>
  </tr>
  <tr style="height:8.25pt;">
    <td class="excel51" style="height:8.25pt;">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel41">&nbsp;</td>
    <td class="excel25">&nbsp;</td>
  </tr>
</table>
<input type="submit" name="submit" value="submit">
</form>
<script><HTML>
<HEAD>
<TITLE>Untitled Document</TITLE>
</HEAD>

<BODY BGCOLOR="#FFFFFF">

</BODY>
</HTML>
rvfunction Total Credit Amount_onclick() {

}

</script>