<?php

if(isset($_REQUEST['submit'])) {
	
	$id = $_GET['search'] ;
	
	
	mysql_connect ("localhost", "root", "") or die ("connection failed");
	mysql_select_db("test");
	
	$query ="SELECT * FROM handover WHERE id='$id'";
	
	if($query === FALSE) {
		echo "didn't search";   // die(mysql_error());		
 
	}
	
	$query=mysql_query($query);
	$num = mysql_num_rows($query);
	
	if($num==0)
		{
			header('location: s handover.html ');
			
			//echo "<h3>no results found</h3>";
		}
		else
		{
	while ($rec = mysql_fetch_array($query, MYSQL_ASSOC)){
	
							$id1				= $rec["id"];
							$department			= $rec["department"];
							$office				= $rec["office"];
							$hereby				= $rec["surname_initials"];
							$handover 			= $rec["surname_initials1"];
							$head_office 		= $rec["head_office"];
							$date 				= $rec["date"];
							$cash				= $rec["cash"];
							$cheques			= $rec["cheques"];
							$post_dated_cheques	= $rec["post_dated_cheques"];
							$other				= $rec["other"];
							$total_amount		= $rec["total_amount"];
							$range_from			= $rec["range_from"];
							$range_to			= $rec["range_to"];
							$total_amount1		= $rec["total_amount1"];
							$handing			= $rec["handing"];
							$receaving			= $rec["receaving"];
							$authorising		= $rec["authorising"];
							$rank1				= $rec["rank1"];
							$rank2				= $rec["rank2"];
							$rank3				= $rec["rank3"];
							$date1				= $rec["date1"];
							$date2				= $rec["date2"];
							$date3				= $rec["date3"];
				}	

		}
	}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
.excel58 {
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
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
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
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
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
border-top:.5pt solid windowtext;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel59 {
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
.excel12 {
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
}
.excel72 {
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
.excel49 {
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
.excel39 {
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
.excel74 {
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
.excel10 {
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
.excel30 {
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
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
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
border-bottom:none;
border-left:.5pt solid windowtext;
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
.excel61 {
padding:0px;
color:windowtext;
font-size:14.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel63 {
padding:0px;
color:windowtext;
font-size:14.0pt;
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
.excel77 {
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
.excel29 {
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
.excel52 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:underline;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
text-underline-style:single;
}
.excel17 {
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
.excel48 {
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
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel108 {
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
border-left:.5pt solid windowtext;
background:silver;
}
.excel37 {
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
border-bottom:none;
border-left:none;
}
.excel43 {
padding:0px;
color:windowtext;
font-size:11.0pt;
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
font-size:11.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel35 {
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
.excel60 {
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
border-top:none;
border-right:none;
border-bottom:none;
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
.excel82 {
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
.excel46 {
padding:0px;
color:windowtext;
font-size:6.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel114 {
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
background:silver;
}
.font5 {
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
}
.excel62 {
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
border-left:none;
}
.excel26 {
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
.excel69 {
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
.excel64 {
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
.excel42 {
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
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
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
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
background:silver;
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
border-left:.5pt solid windowtext;
}
.excel106 {
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
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel107 {
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
border-bottom:.5pt solid windowtext;
border-left:1.0pt solid windowtext;
}
.excel51 {
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
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel40 {
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
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel6 {
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
border-bottom:.5pt solid windowtext;
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
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel47 {
padding:0px;
color:windowtext;
font-size:6.0pt;
font-weight:400;
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
.excel7 {
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
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel50 {
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
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel22 {
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
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel41 {
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
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel117 {
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
border-left:1.0pt solid windowtext;
}
.excel15 {
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
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
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
border-bottom:none;
border-left:1.0pt solid windowtext;
}
.excel54 {
padding:0px;
color:windowtext;
font-size:6.0pt;
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
.excel14 {
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
.excel127 {
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
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
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
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel32 {
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
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel21 {
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
.excel56 {
padding:0px;
color:windowtext;
font-size:6.0pt;
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
.excel19 {
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
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
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
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:2.0pt double windowtext;
border-left:.5pt solid windowtext;
}
.excel124 {
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
border-right:none;
border-bottom:2.0pt double windowtext;
border-left:1.0pt solid windowtext;
}
.excel55 {
padding:0px;
color:windowtext;
font-size:6.0pt;
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
}
.excel25 {
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
.excel66 {
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
.excel38 {
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
.excel36 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel119 {
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
.excel122 {
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
border-bottom:2.0pt double windowtext;
border-left:.5pt solid windowtext;
}
.excel31 {
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
.excel11 {
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
.excel111 {
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
white-space:normal;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel93 {
padding:0px;
color:windowtext;
font-size:6.0pt;
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
.excel33 {
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
.excel34 {
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
.excel57 {
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
.excel99 {
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
.excel89 {
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
.excel96 {
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
.excel90 {
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
.excel129 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:top;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel67 {
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
.excel80 {
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
.excel20 {
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
    #Text1
    {
        width: 517px;
    }
    #Text2
    {
        width: 517px;
    }
    #Text3
    {
        width: 517px;
    }
    #Text4
    {
        width: 517px;
    }
    #Text5
    {
        width: 517px;
    }
    #Text6
    {
        width: 155px;
    }
    #Text7
    {
        width: 239px;
    }
    #Text8
    {
        width: 239px;
    }
    #Text9
    {
        width: 239px;
    }
    #Text10
    {
        width: 239px;
    }
    #Text11
    {
        width: 239px;
    }
    #Text12
    {
        width: 251px;
    }
    #Text13
    {
        width: 251px;
    }
    #Text14
    {
        width: 251px;
    }
    #Text15
    {
        width: 158px;
    }
    #Text16
    {
        width: 158px;
    }
    #Text17
    {
        width: 158px;
    }
    #Text18
    {
        width: 158px;
    }
    #Text19
    {
        width: 158px;
    }
    #Text20
    {
        width: 158px;
    }
    #Text21
    {
        width: 158px;
    }
    #Text22
    {
        width: 158px;
    }
    #Text23
    {
        width: 200px;
    }
    #Text24
    {
        width: 200px;
    }
    #Text25
    {
        width: 200px;
    }
    #Text26
    {
        width: 200px;
    }
    #Office
    {
        width: 301px;
    }
    #Date
    {
        width: 155px;
    }
    #Cheques
    {
        width: 240px;
        text-align: left;
    }
    #cash
    {
        width: 240px;
        text-align: left;
    }
    #Rank
    {
        width: 202px;
    }
    #Rank0
    {
        width: 202px;
    }
    #Rank1
    {
        width: 202px;
    }
    #date4
    {
        width: 210px;
    }
    #date5
    {
        width: 205px;
    }
    #date6
    {
        width: 207px;
    }
    .style3
    {
        padding: 0px;
        color: windowtext;
        font-size: 10.0pt;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: left;
        vertical-align: bottom;
        white-space: nowrap;
        border-bottom: 2.0pt double windowtext;
        border-left: 1.0pt solid windowtext;
        border-right-style: none;
        border-right-color: inherit;
        border-right-width: medium;
        border-top-style: none;
        border-top-color: inherit;
        border-top-width: medium;
    }
    .style4
    {
        padding: 0px;
        color: windowtext;
        font-size: 10.0pt;
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
    .style5
    {
        padding: 0px;
        color: windowtext;
        font-size: 10.0pt;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: left;
        vertical-align: bottom;
        white-space: nowrap;
        border-top: .5pt solid windowtext;
        border-left: 1.0pt solid windowtext;
        border-right-style: none;
        border-right-color: inherit;
        border-right-width: medium;
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
        font-size: xx-large;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
    }
    .style10
    {
        width: 12pt;
        height: 1pt;
    }
    .style11
    {
        padding: 0px;
        color: windowtext;
        font-size: 10.0pt;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        font-family: Arial;
        text-align: general;
        vertical-align: bottom;
        white-space: nowrap;
        border-top: .5pt solid windowtext;
        width: 12pt;
        height: 1pt;
        border-left-style: none;
        border-left-color: inherit;
        border-left-width: medium;
        border-right-style: none;
        border-right-color: inherit;
        border-right-width: medium;
        border-bottom-style: none;
        border-bottom-color: inherit;
        border-bottom-width: medium;
    }
    .style12
    {
        padding: 0px;
        color: windowtext;
        font-size: 10.0pt;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        font-family: Arial;
        text-align: general;
        vertical-align: bottom;
        white-space: nowrap;
        border-top: .5pt solid windowtext;
        width: 16pt;
        height: 1pt;
        border-left-style: none;
        border-left-color: inherit;
        border-left-width: medium;
        border-right-style: none;
        border-right-color: inherit;
        border-right-width: medium;
        border-bottom-style: none;
        border-bottom-color: inherit;
        border-bottom-width: medium;
    }
    .style13
    {
        padding: 0px;
        color: windowtext;
        font-size: 10.0pt;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        font-family: Arial;
        text-align: general;
        vertical-align: bottom;
        white-space: nowrap;
        border-top: .5pt solid windowtext;
        border-right: .5pt solid windowtext;
        width: 12pt;
        height: 1pt;
        border-left-style: none;
        border-left-color: inherit;
        border-left-width: medium;
        border-bottom-style: none;
        border-bottom-color: inherit;
        border-bottom-width: medium;
    }
-->
</style>
</head>

<body>
<form action="HANDOVER CERTIFICATE.php" method="POST">
<table cellspacing="0" cellpadding="0" class="excel1">
  <col width="16" style="width:12pt;" />
  <col width="16" span="13" style="width:12pt;" />
  <col width="21" style="width:16pt;" />
  <col width="16" span="25" style="width:12pt;" />
  <tr>
    <td width="16" align="left" valign="top" class="style10">&nbsp;</td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style12" width="21"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style11" width="16"></td>
    <td class="style13" width="16"></td>
  </tr>
  <tr style="height:20.25pt;">
    <td class="excel59" style="height:20.25pt;">&nbsp;</td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td colspan="32" width="517" style="height:20.25pt;width:388pt;" align="left" valign="top">&nbsp;<table cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="32" class="style9" width="517" style="height:20.25pt;width:388pt;">
              HAND OVER CERTIFICATE
        </tr>
      </table></td>
    <td class="excel12"></td>
    <td class="excel49">&nbsp;</td>
  </tr>
  <tr style="height:20.25pt;">
    <td class="excel59" style="height:20.25pt;">&nbsp;</td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel49">&nbsp;</td>
  </tr>
  <tr style="height:12.0pt;">
    <td class="excel39" colspan="5" style="height:12.0pt;">Department    Name</td>
    <td colspan="35"class="excel16" >
        :<u><?php echo "$department"; ?></u></td>
  </tr>
  <tr style="height:12.0pt;">
    <td class="excel10" style="height:12.0pt;">&nbsp;</td>
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
    <td class="excel30"></td>
    <td class="excel30"></td>
    <td class="excel30"></td>
    <td class="excel30"></td>
    <td></td>
    <td class="excel30"></td>
    <td class="excel30"></td>
    <td class="excel30"></td>
    <td class="excel30"></td>
    <td class="excel30"></td>
    <td class="excel30"></td>
    <td class="excel30"></td>
    <td class="excel30"></td>
    <td class="excel30"></td>
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
    <td class="excel16">&nbsp;</td>
  </tr>
  <tr style="height:12.0pt;">
    <td class="excel23" style="height:12.0pt;">&nbsp;</td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel61"></td>
    <td class="excel63">&nbsp;</td>
  </tr>
  <tr  style="height:12.75pt;">
    <td  class="excel23" colspan="5" style="height:12.75pt;">Office </td>
    
    <td colspan="32"  >
        :<u><?php echo "$office"; ?></u></td>
  
    <td ></td>
    <td class="excel17" ></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel10" style="height:12.75pt;">&nbsp;</td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
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
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td></td>
    <td class="excel29"></td>
    <td class="excel29"></td>
    <td class="excel29"></td>
    <td class="excel29"></td>
    <td class="excel29"></td>
    <td class="excel29"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel52"></td>
    <td class="excel52"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel2"></td>
    <td class="excel16">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel23" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
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
    <td class="excel17">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="5"class="excel48" style="height:12.75pt; text-align: left;">Hereby I </td>
    
    <td colspan="31"  >
	:<u><?php echo "$hereby"; ?></u></td>
    <td></td>
    <td></td>
    <td class="excel16"></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel23" style="height:12.75pt;">&nbsp;</td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
   
    <td colspan="7" class="excel108" style="border-right:.5pt solid black;">Surname and    Initials </td>
    <td class="excel37" style="border-top:none;">&nbsp;</td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td> <td></td>
    <td></td>
    <td></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel17">&nbsp;</td>
  </tr>
  <tr style="height:14.25pt;">
    <td class="excel43" style="height:14.25pt;">&nbsp;</td>
    <td class="excel44"></td>
    <td class="excel44"></td>
    <td class="excel44"></td>
    <td class="excel44"></td>
    <td class="excel44"></td>
    <td class="excel44"></td>
    <td class="excel44"></td>
    <td class="excel44"></td>
    <td class="excel44"></td>
    <td class="excel44"></td>
    <td class="excel44"></td>
    <td class="excel44"></td>
    <td class="excel44"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel44"></td>
    <td class="excel44"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel17">&nbsp;</td>
  </tr>
  <tr style="height:14.25pt;">
    <td class="excel39" colspan="16" style="height:14.25pt;">Handover    the the content of the safe to: </td>
    <td class="excel30"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td></td>
    <td></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel17">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel23" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td class="excel13"></td>
    <td></td>
    <td></td>
    
    <td colspan="32" >
        :<u><?php echo "$handover"; ?></u></td><td></td>
    <td></td>
    <td class="excel16"></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel60" style="height:12.75pt;">&nbsp;</td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    
    <td colspan="7" class="excel108" style="border-right:.5pt solid black;">Surname and    Initials </td>
    <td class="excel37" style="border-top:none;">&nbsp;</td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td><td></td>
    <td></td>
    <td></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td></td>
    <td></td>
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel23" style="height:12.75pt;">&nbsp;</td>
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
    <td></td>
    <td class="excel17">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel39" colspan="8" style="height:12.75pt;">In    the presence of: </td>
    <td></td>
    <td></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
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
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel10" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
    <td colspan="32" >
        :<u><?php echo "$head_office"; ?></u></td><td></td>
    <td></td>
    <td class="excel16"></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel10" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
    <td colspan="5" class="excel108" style="border-right:.5pt solid black;">Head of    Office </td>
    <td class="excel37" style="border-top:none;">&nbsp;</td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
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
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel39" colspan="2" style="height:12.75pt;">on:</td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel3"></td>
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
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel48" style="height:12.75pt;">&nbsp;</td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td></td>
    
    <td colspan="10" >
        :<u><?php echo "$date"; ?></u></td>
        <td></td>
    <td></td>
    <td ></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel49">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel23" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
    <td colspan="6" class="excel114" style="border-right:.5pt solid black;">Date </td>
    <td class="excel62" style="border-top:none;">&nbsp;</td><td></td>
    <td></td>
    <td class="excel46"></td>
      <td class="excel46"></td>
    <td class="excel46"></td>
    <td class="excel46"></td>
    <td class="excel46"></td>
    <td class="excel46"></td>
    <td class="excel46"></td>
    <td class="excel46"></td>
    <td></td>
    <td class="excel46"></td>
    <td class="excel46"></td>
    <td class="excel46"></td>
    <td class="excel46"></td>
    <td class="excel2"></td>
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
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel26" style="height:12.75pt;">&nbsp;</td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel44"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td></td>
    <td></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td class="excel3"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="40" class="excel69" style="border-right:.5pt solid black;height:12.75pt;">The Following Monies are Handed Over </td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel64" style="height:12.75pt;border-top:none;">&nbsp;</td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel42"></td>
    <td class="excel53">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="23" class="excel69" style="height:12.75pt;">Description </td>
    <td class="excel45">&nbsp;</td>
    <td colspan="16" class="excel69" style="border-right:.5pt solid black;">Amount </td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel4" style="height:12.75pt;border-top:none;">&nbsp;</td>
    <td class="excel5"></td>
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
    <td colspan="13" style="font-weight: 700; text-align: center" >Rand </td>
    <td colspan="3" class="excel49" style="border-right:.none;">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel51" colspan="2" style="height:13.5pt;" >Cash </td>

    <td class="excel6">&nbsp;</td>
    <td class="excel6">&nbsp;</td>
    <td class="excel6">&nbsp;</td>
    <td class="excel6">&nbsp;</td>
    <td class="excel6">&nbsp;</td>
    <td class="excel6">&nbsp;</td>
    <td class="excel5">&nbsp;</td>
    <td class="excel5">&nbsp;</td>
    <td class="excel5">&nbsp;</td>
    <td class="excel47">&nbsp;</td>
    <td class="excel7">&nbsp;</td>
    <td class="excel5">&nbsp;</td>
    <td class="excel47">&nbsp;</td>
    <td class="excel5">&nbsp;</td>
    <td class="excel5">&nbsp;</td>
    <td class="excel5">&nbsp;</td>
    <td class="excel5">&nbsp;</td>
    <td class="excel50">&nbsp;</td>
    <td class="excel5">&nbsp;</td>
    <td class="excel7">&nbsp;</td>
    <td class="excel7">&nbsp;</td>
    <td class="excel22">&nbsp;</td>
    <td class="excel41" style="border-top:none;border-left:none;">R</td>
    <td colspan="15" class="style4" style="border-right:.5pt solid black;">
        :<u><?php echo "$cash"; ?></u></td>
  </tr>
  <tr style="height:12.75pt;">
    <td  class="excel51" colspan="4" style="font-weight: 700" >Cheques </td>
    <td class="excel6" style="border-top:none;">&nbsp;</td>
    <td class="excel6" style="border-top:none;">&nbsp;</td>
    <td class="excel6" style="border-top:none;">&nbsp;</td>
    <td class="excel6" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel22" style="border-top:none;">&nbsp;</td>
    <td class="excel41" style="border-top:none;border-left:none;">R</td>
    <td colspan="15" class="style4" style="border-right:.5pt solid black;">
        :<u><?php echo "$cheques"; ?></u></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel51" colspan="9" >Post    Dated Cheques </td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel47" style="border-top:none;">&nbsp;</td>
    <td class="excel15" style="border-top:none;">&nbsp;</td>
    <td class="excel47" style="border-top:none;">&nbsp;</td>
    <td class="excel47" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel47" style="border-top:none;">&nbsp;</td>
    <td class="excel15" style="border-top:none;">&nbsp;</td>
    <td class="excel47" style="border-top:none;">&nbsp;</td>
    <td class="excel47" style="border-top:none;">&nbsp;</td>
    <td class="excel47" style="border-top:none;">&nbsp;</td>
    <td class="excel47" style="border-top:none;">&nbsp;</td>
    <td class="excel22" style="border-top:none;">&nbsp;</td>
    <td class="excel41" style="border-top:none;border-left:none;">R</td>
    <td colspan="15" class="style5" style="border-right:.5pt solid black;">
        :<u><?php echo "$post_dated_cheques"; ?></u></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel51" colspan="3" style="height:12.75pt;">Other </td>
    <td class="excel6" style="border-top:none;">&nbsp;</td>
    <td class="excel6" style="border-top:none;">&nbsp;</td>
    <td class="excel54" style="border-top:none;">&nbsp;</td>
    <td class="excel14" style="border-top:none;">&nbsp;</td>
    <td class="excel6" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel47" style="border-top:none;">&nbsp;</td>
    <td class="excel15" style="border-top:none;">&nbsp;</td>
    <td class="excel47" style="border-top:none;">&nbsp;</td>
    <td class="excel47" style="border-top:none;">&nbsp;</td>
    <td class="excel5" style="border-top:none;">&nbsp;</td>
    <td class="excel47" style="border-top:none;">&nbsp;</td>
    <td class="excel15" style="border-top:none;">&nbsp;</td>
    <td class="excel47" style="border-top:none;">&nbsp;</td>
    <td class="excel47" style="border-top:none;">&nbsp;</td>
    <td class="excel47" style="border-top:none;">&nbsp;</td>
    <td class="excel47" style="border-top:none;">&nbsp;</td>
    <td class="excel22" style="border-top:none;">&nbsp;</td>
    <td class="excel41" style="border-top:none;border-left:none;">R</td>
    <td colspan="15" class="style4" style="border-right:.5pt solid black;">
        :<u><?php echo "$other"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel51" colspan="6" style="height:13.5pt;">Total    Amount </td>
    <td class="excel18">&nbsp;</td>
    <td class="excel32">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel19">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel19">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel9">&nbsp;</td>
    <td class="excel65" style="border-left:none;">R</td>
    <td colspan="15" class="style3" style="border-right:.5pt solid black;">
        :<u><?php echo "$total_amount"; ?></u></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel51" style="height:13.5pt;">&nbsp;</td>
    <td class="excel32">&nbsp;</td>
    <td class="excel32">&nbsp;</td>
    <td class="excel32">&nbsp;</td>
    <td class="excel32">&nbsp;</td>
    <td class="excel55">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel32">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel19">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel19">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel56">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel24"></td>
    <td class="excel24"></td>
    <td class="excel24"></td>
    <td class="excel24"></td>
    <td class="excel24"></td>
    <td class="excel24"></td>
    <td class="excel24"></td>
    <td class="excel24"></td>
    <td class="excel24"></td>
    <td class="excel24"></td>
    <td class="excel24"></td>
    <td class="excel24"></td>
    <td class="excel24"></td>
    <td class="excel25"></td>
    <td class="excel24"></td>
    <td class="excel66">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="40" class="excel69" style="border-right:.5pt solid black;height:12.75pt;">Receipts Issued </td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel38" style="height:12.75pt;border-top:none;">&nbsp;</td>
    <td class="excel36"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td></td>
    <td class="excel3"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td></td>
    <td class="excel13"></td>
    <td class="excel3"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel3"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel3"></td>
    <td class="excel13"></td>
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
    <td class="excel8">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel39" colspan="4" style="height:12.75pt;">Range </td>
    <td></td>
    <td></td>
    
    <td class="excel3" colspan="4">No. From: </td>
    <td></td>
    <td colspan="16" >
        :<u><?php echo "$range_from"; ?></u></td>
        <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td></td>
    <td class="excel3"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td></td>
    <td class="excel13"></td>
    <td class="excel3"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel49"></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel23" style="height:12.75pt;">&nbsp;</td>
    <td class="excel36"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
    <td class="excel3" colspan="3">No. To: </td>
    <td class="excel13"></td>
    <td></td>
    <td colspan="16" >
       :<u><?php echo "$range_to"; ?></u></td><td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td></td>
    <td class="excel3"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td></td>
    <td class="excel13"></td>
    <td class="excel3"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel49"></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel39" colspan="6" style="height:13.5pt;">Total    Amount </td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td colspan="16" >
        :<u><?php echo "$total_amount1"; ?></u></td>
    <td></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td ></td>
    <td class="excel49"></td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel31" style="height:13.5pt;">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel11">&nbsp;</td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel12"></td>
    <td class="excel49">&nbsp;</td>
  </tr>
  <tr style="height:24.0pt;">
    <td colspan="10" class="excel111" width="160" style="border-right:.5pt solid black;height:24.0pt;width:120pt;">Name &amp; Surname of Official Handing Over</td>
    <td colspan="10" class="excel111" width="165" style="border-right:.5pt solid black;border-left:none;width:124pt;">Name &amp; Surname of Official Receiving Safe    Content</td>
    <td colspan="10" class="excel111" width="160" style="border-right:.5pt solid black;border-left:none;width:120pt;">Name &amp; Surname of Official Authirising the    Hand Over</td>
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
    <td colspan="10" class="excel93" style="border-right:.5pt solid black;height:12.75pt;">
        <u><?php echo "$handing"; ?></u></td>
    <td colspan="10" class="excel93" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$receaving"; ?></u></td>
    <td colspan="10" class="excel93" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$authorising"; ?></u></td>
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
    <td colspan="10" class="excel96" style="border-right:.5pt solid black;height:12.75pt;">Signature </td>
    <td colspan="10" class="excel96" style="border-right:.5pt solid black;border-left:none;">Signature </td>
    <td colspan="10" class="excel96" style="border-right:.5pt solid black;border-left:none;">Signature </td>
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
    <td colspan="10" class="excel80" style="border-right:.5pt solid black;height:15.0pt;">
		<u><?php //echo "$Signature"; ?></u></td>
    <td colspan="10"  class="excel129" style="border-right:.5pt solid black;border-bottom:.5pt solid black;">
        <u><?php //echo "$Signature0"; ?></u></td>
    <td colspan="10"  class="excel129" style="border-right:.5pt solid black;border-bottom:.5pt solid black;">
        <u><?php //echo "$Signature1"; ?></u></td>
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
    <td colspan="10" class="excel67" style="border-right:.5pt solid black;height:13.5pt;">Date </td>
    <td colspan="10" class="excel67" style="border-right:.5pt solid black;border-left:none;">Date</td>
    <td colspan="10" class="excel67" style="border-right:.5pt solid black;border-left:none;">Date</td>
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
    <td colspan="10" class="excel80" style="border-right:.5pt solid black;height:15.0pt;">
        <u><?php echo "$date1"; ?></u></td>
    <td colspan="10" class="excel80" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$date2"; ?></u></td>
    <td colspan="10" class="excel80" style="border-right:.5pt solid black;border-left:none;">
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
    <td class="excel26" style="height:12.75pt;">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel21">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel18">&nbsp;</td>
    <td class="excel20">&nbsp;</td>
  </tr>
</table>

<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

<html xmlns="http://www.w3.org/1999/xhtml"><script language="javascript" type="text/javascript">                                                                 </script></html>
<html xmlns="http://www.w3.org/1999/xhtml"><script language="javascript" type="text/javascript">                                               function Text26_onclick() {

                                               }

</script></html>