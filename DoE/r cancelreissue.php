
<?php

if(isset($_REQUEST['submit'])) {
	
	$id = $_GET['search'];
	
	
	mysql_connect ("localhost", "root", "") or die ("connection failed");
	mysql_select_db("testdb");
	
	$query ="SELECT * FROM cancelreissue WHERE id='$id'";
	
	if($query === FALSE) {
echo "didn't search";		
   // die(mysql_error());
	}
	
	$query=mysql_query($query);
	$num = mysql_num_rows($query);	
	
	if($num==0)
		{
			header('location: s cancelreissue.html ');
		}
		else
		{
while ($rec = mysql_fetch_array($query, MYSQL_ASSOC)){
				$id					= $rec["id"];
				$department			= $rec["department"];
				$office				= $rec["office"];
				$beneficiary_name	= $rec["beneficiary_name"];
				$reason_canceling	= $rec["reason_canceling"];
				$other				= $rec["other"];
				$disbursement_no 	= $rec["disbursement_no"];
				$cheque_no			= $rec["cheque_no"];
				$cheque_date1		= $rec["cheque_date1"];
				$amount1			= $rec["amount1"];
				$disbursement_type	= $rec["disbursement_type"];
				$re_issue_options	= $rec["re_issue_options"];
				$payment_method		= $rec["payment_method"];
				$cheque_date2		= $rec["cheque_date2"];
				$micr_no			= $rec["micr_no"];
				$amount2			= $rec["amount2"];
				$compiled_by		= $rec["compiled_by"];
				$checked_by			= $rec["checked_by"];
				$authorised_by		= $rec["authorised_by"];
				$rank1				= $rec["rank1"];
				$rank2				= $rec["rank2"];
				$rank3				= $rec["rank3"];
				$date1				= $rec["date1"];
				$date2				= $rec["date2"];
				$date3				= $rec["date3"];
				$fullnames			= $rec["fullnames"];
				$firm				= $rec["firm"];
				$Dcheque_no			= $rec["Dcheque_no"];
				$Dcheque_date		= $rec["Dcheque_date"];
				$Dcheque_amount		= $rec["Dcheque_amount"];
				$id_no1				= $rec["id_no1"];
				$id_no2				= $rec["id_no2"];
				$Ddate1				= $rec["Ddate1"];
				$Ddate2				= $rec["Ddate2"];
				$address1			= $rec["address1"];
				$address2			= $rec["address2"];
				$office_date		= $rec["office_date"];
				$Oauthorised_by		= $rec["Oauthorised_by"];
				$Orank				= $rec["Orank"];
				$Odate				= $rec["Odate"];
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
.excel62 {
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
.excel101 {
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
.excel26 {
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
.excel126 {
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
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel104 {
padding:0px;
color:windowtext;
font-size:14.5pt;
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
.excel70 {
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
.excel24 {
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
.excel27 {
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
.excel158 {
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
.excel127 {
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
.excel116 {
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
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
background:silver;
}
.excel73 {
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
.excel115 {
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
background:silver;
}
.excel48 {
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
.excel5 {
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
.excel8 {
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
.excel84 {
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
.excel103 {
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
.excel52 {
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
.excel14 {
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
.excel159 {
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
.excel46 {
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
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt hairline windowtext;
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel53 {
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
.excel16 {
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
.excel11 {
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
.excel18 {
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
.excel19 {
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
.excel20 {
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
.excel21 {
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
.excel22 {
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
.excel54 {
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
border-right:none;
border-bottom:.5pt hairline windowtext;
border-left:none;
}
.excel56 {
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
.excel30 {
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
.excel33 {
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
.excel72 {
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
.excel86 {
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
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel77 {
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
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel35 {
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
.excel25 {
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
.excel160 {
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
.excel121 {
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
.excel61 {
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
background:silver;
}
.excel76 {
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
.excel79 {
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
}
.excel105 {
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
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel47 {
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
.excel128 {
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
.excel98 {
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
.excel60 {
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
border-right:1.0pt solid windowtext;
border-bottom:2.0pt double windowtext;
border-left:.5pt solid windowtext;
}
.excel162 {
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
border-left:1.0pt solid windowtext;
}
.excel44 {
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
.excel36 {
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
.excel83 {
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
border-left:none;
}
.excel71 {
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
.excel28 {
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
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
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
.excel75 {
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
.excel74 {
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
.excel81 {
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
.excel40 {
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
.excel88 {
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
background:silver;
}
.excel38 {
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
.excel63 {
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
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
background:silver;
}
.excel114 {
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
background:silver;
}
.excel141 {
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
border-right:.5pt solid windowtext;
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
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel17 {
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
.excel164 {
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
}
.font7 {
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:"Arial Black", sans-serif;
}
.excel139 {
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
border-left:none;
}
.excel112 {
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
border-right:.5pt solid windowtext;
border-bottom:none;
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
text-align:left;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
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
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel43 {
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
border-top:none;
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
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel118 {
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
.excel142 {
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
.excel92 {
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
.excel93 {
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
.excel94 {
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
.excel123 {
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
.excel69 {
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
.excel145 {
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
.excel97 {
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
.excel91 {
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
.excel95 {
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
.excel90 {
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
.excel68 {
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
.excel89 {
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
.excel96 {
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
.excel100 {
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
.excel117 {
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
.excel133 {
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
.excel129 {
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
border-left:none;
}
.excel102 {
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
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel80 {
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
.excel51 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel85 {
padding:0px;
color:windowtext;
font-size:7.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center-across;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel106 {
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
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel67 {
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
.excel82 {
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
.excel156 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel165 {
padding:0px;
color:black;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel107 {
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
.excel166 {
padding:0px;
color:black;
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
.excel65 {
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
.excel108 {
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
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel167 {
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
.excel64 {
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
.excel168 {
padding:0px;
color:black;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:middle;
border:none;
white-space:normal;
}
.excel151 {
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
.excel135 {
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
.excel170 {
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
padding-left:12px;
}
.excel171 {
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
padding-left:12px;
}
.excel172 {
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
border-bottom:.5pt solid windowtext;
border-left:none;
padding-left:12px;
}
.excel173 {
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
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
padding-left:12px;
}
.excel87 {
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
.excel174 {
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
border-bottom:none;
border-left:.5pt solid windowtext;
padding-left:12px;
}
.excel175 {
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
padding-left:12px;
}
.excel176 {
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
border-bottom:.5pt solid windowtext;
border-left:none;
padding-left:12px;
}
.excel177 {
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
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
padding-left:12px;
}
.excel178 {
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
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
padding-left:12px;
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
border-top:none;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel109 {
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
.excel50 {
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
.excel110 {
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
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel111 {
padding:0px;
color:windowtext;
font-size:11.0pt;
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
.excel179 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:top;
border:none;
white-space:normal;
}
.excel180 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:top;
border:none;
white-space:normal;
}
.excel181 {
padding:0px;
color:windowtext;
font-size:9.0pt;
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
.excel184 {
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
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel150 {
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
.excel130 {
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
.excel149 {
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
-->
</style>
<style type="text/css">
<!--
.excel6 {
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
.excel210 {
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
.excel195 {
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
.excel122 {
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
.excel247 {
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
.excel154 {
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
.excel335 {
padding:0px;
color:windowtext;
font-size:16.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:top;
border:none;
white-space:normal;
}
.excel245 {
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
.excel250 {
padding:0px;
color:windowtext;
font-size:14.5pt;
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
.excel218 {
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
.excel189 {
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
.excel148 {
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
.excel255 {
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
.excel155 {
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
.excel305 {
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
.excel273 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:center;
vertical-align:bottom;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:white;
        border-right-style: none;
        border-right-color: inherit;
        border-right-width: medium;
    }
.excel263 {
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
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
background:silver;
}
.excel221 {
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
.excel262 {
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
background:silver;
}
.excel152 {
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
.excel198 {
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
.excel66 {
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
.excel120 {
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
.excel232 {
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
.excel249 {
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
.excel191 {
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
.excel31 {
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
.excel131 {
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
.excel132 {
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
.excel201 {
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
.excel134 {
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
}
.excel306 {
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
.excel196 {
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
.excel136 {
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
.excel202 {
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
.excel137 {
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
.excel339 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:top;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel125 {
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
border-left:.5pt solid windowtext;
}
.excel143 {
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
.excel144 {
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
.excel146 {
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
.excel147 {
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
.excel203 {
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
.excel204 {
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
.excel205 {
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
.excel161 {
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
.excel182 {
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
.excel220 {
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
.excel233 {
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
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel225 {
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
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel185 {
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
.excel153 {
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
.excel307 {
    border-style: none;
        border-color: inherit;
        border-width: medium;
        padding: 0px;
        color:windowtext;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial;
        vertical-align:bottom;
        white-space:nowrap;
}
.excel268 {
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
.excel209 {
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
background:silver;
}
.excel224 {
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
.excel227 {
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
        vertical-align:bottom;
        white-space:nowrap;
}
.excel251 {
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
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel197 {
    border-style: none;
        border-color: inherit;
        border-width: medium;
        padding: 0px;
        color:windowtext;
        font-size:8.0pt;
        font-weight:700;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
text-align:left;
        vertical-align:bottom;
        white-space:nowrap;
}
.excel274 {
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
.excel244 {
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
.excel208 {
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
border-right:1.0pt solid windowtext;
border-bottom:2.0pt double windowtext;
border-left:.5pt solid windowtext;
}
.excel309 {
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
border-left:1.0pt solid windowtext;
}
.excel194 {
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
.excel186 {
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
.excel231 {
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
border-left:none;
}
.excel219 {
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
.excel285 {
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
.excel157 {
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
.excel32 {
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
.excel223 {
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
.excel222 {
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
.excel211 {
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
.excel229 {
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
border-top:.5pt solid windowtext;
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel234 {
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
background:silver;
}
.excel188 {
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
.excel338 {
padding:0px;
color:black;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:none;
border-left:none;
}
.excel260 {
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
background:silver;
}
.excel261 {
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
background:silver;
}
.excel288 {
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
.excel206 {
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
border-left:.5pt solid windowtext;
}
.excel207 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial;
text-align:general;
vertical-align:bottom;
border:.5pt solid windowtext;
white-space:nowrap;
}
.excel138 {
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
.excel311 {
    border-style: none;
        border-color: inherit;
        border-width: medium;
        padding: 0px;
        color:windowtext;
        font-size:8.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:"Arial Narrow", sans-serif;
text-align:left;
        vertical-align:middle;
        white-space:nowrap;
}
.excel286 {
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
border-left:none;
}
.excel259 {
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
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel183 {
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
border-left:.5pt solid windowtext;
}
.excel193 {
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
.excel199 {
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
.excel192 {
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
.excel265 {
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
.excel289 {
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
.excel238 {
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
.excel239 {
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
.excel240 {
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
.excel270 {
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
.excel217 {
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
.excel292 {
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
.excel243 {
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
.excel237 {
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
.excel241 {
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
.excel236 {
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
.excel216 {
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
.excel235 {
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
.excel242 {
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
.excel246 {
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
.excel264 {
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
.excel279 {
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
.excel275 {
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
border-left:none;
}
.excel334 {
padding:0px;
color:black;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:top;
border:none;
white-space:normal;
}
.font9 {
color:black;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:underline;
text-underline-style:single;
font-family:Arial, sans-serif;
}
.font8 {
color:black;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
}
.excel248 {
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
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel252 {
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
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel230 {
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
.excel215 {
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
.excel303 {
padding:0px;
color:windowtext;
font-size:10.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:middle;
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel312 {
padding:0px;
color:black;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel253 {
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
.excel341 {
padding:0px;
color:black;
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
.excel313 {
    border-style: none;
        border-color: inherit;
        border-width: medium;
        padding: 0px;
        color:black;
        font-size:10.0pt;
        font-weight:400;
        font-style:normal;
        text-decoration:none;
        font-family:Arial, sans-serif;
text-align:right;
        vertical-align:bottom;
        white-space:nowrap;
}
.excel213 {
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
.excel254 {
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
border-top:none;
border-right:none;
border-bottom:none;
border-left:.5pt solid windowtext;
}
.excel314 {
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
.excel212 {
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
.excel315 {
padding:0px;
color:black;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:left;
vertical-align:middle;
border:none;
white-space:normal;
}
.excel298 {
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
.excel281 {
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
.excel228 {
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
.excel317 {
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
padding-left:12px;
}
.excel333 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
}
.excel319 {
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
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
padding-left:12px;
}
.excel320 {
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
border-bottom:none;
border-left:.5pt solid windowtext;
padding-left:12px;
}
.excel322 {
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
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
padding-left:12px;
}
.excel318 {
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
border-bottom:.5pt solid windowtext;
border-left:none;
padding-left:12px;
}
.excel321 {
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
border-bottom:.5pt solid windowtext;
border-left:none;
padding-left:12px;
}
.excel323 {
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
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
padding-left:12px;
}
.excel187 {
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
.excel256 {
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
.excel200 {
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
.excel257 {
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
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel258 {
padding:0px;
color:windowtext;
font-size:11.0pt;
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
.excel324 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:top;
border:none;
white-space:normal;
}
.excel325 {
padding:0px;
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:general;
vertical-align:top;
border:none;
white-space:normal;
}
.excel337 {
padding:0px;
color:black;
font-size:10.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel326 {
padding:0px;
color:windowtext;
font-size:9.0pt;
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
.excel329 {
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
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel297 {
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
.excel276 {
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
.excel296 {
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
    #Text1
    {
        width: 467px;
    }
    #Text2
    {
        width: 467px;
    }
    #Text3
    {
        width: 467px;
    }
    #Text4
    {
        width: 605px;
    }
    #Text5
    {
        width: 273px;
    }
    #Text6
    {
        width: 355px;
    }
    #Text7
    {
        width: 155px;
    }
    #Text8
    {
        width: 256px;
    }
    #Text9
    {
        width: 259px;
    }
    #Text10
    {
        width: 278px;
    }
    #Text11
    {
        width: 278px;
    }
    #Text12
    {
        width: 173px;
    }
    #Text13
    {
        width: 173px;
    }
    #Text14
    {
        width: 173px;
    }
    #Text15
    {
        width: 173px;
    }
    #Text16
    {
        width: 173px;
    }
    #Text15
    {
        width: 173px;
    }
    #Text15
    {
        width: 278px;
    }
    #Text16
    {
        width: 278px;
    }
    #Text17
    {
        width: 278px;
    }
    #Text18
    {
        width: 278px;
    }
    #Text19
    {
        width: 278px;
    }
    #Text20
    {
        width: 278px;
    }
    #Text21
    {
        width: 278px;
    }
    #Text22
    {
        width: 173px;
    }
    #Text23
    {
        width: 709px;
    }
    #Text24
    {
        width: 598px;
    }
    #Text25
    {
        width: 297px;
        text-align: left;
    }
    #Text26
    {
        width: 226px;
    }
    #Text27
    {
        width: 359px;
    }
    #Text28
    {
        width: 271px;
    }
    #Text30
    {
        width: 167px;
    }
    #Text29
    {
        width: 217px;
    }
    #TextArea1
    {
        height: 84px;
        width: 440px;
        margin-left: 0px;
    }
    #TextArea2
    {
        height: 84px;
        width: 296px;
        margin-left: 0px;
    }
    #Text31
    {
        width: 295px;
    }
    #Text32
    {
        width: 279px;
    }
    #Text33
    {
        width: 279px;
    }
    #Text34
    {
        width: 279px;
    }
    #Text35
    {
        width: 279px;
    }
    #office
    {
        width: 460px;
    }
    #Amount
    {
        width: 371px;
    }
    #amount3
    {
        width: 264px;
    }
    #rank
    {
        width: 270px;
    }
    #rank0
    {
        width: 270px;
    }
    #rank1
    {
        width: 175px;
    }
    #Signature
    {
        width: 274px;
    }
    #Signature0
    {
        width: 274px;
    }
    #Signature1
    {
        width: 174px;
    }
    #date
    {
        width: 277px;
    }
    #date0
    {
        width: 277px;
    }
    #date1
    {
        width: 178px;
    }
    #Fullname
    {
        width: 709px;
    }
    #Firm
    {
        width: 605px;
    }
    #date4
    {
        width: 345px;
        text-align: left;
    }
    #dated
    {
        width: 308px;
    }
    #Rank
    {
        width: 274px;
    }
    #date6
    {
        width: 272px;
    }
    .style1
    {
        padding: 0px;
        color: windowtext;
        font-size: 16.0pt;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        border-left: .5pt solid windowtext;
        height: 23pt;
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
        border-style: none;
        border-color: inherit;
        border-width: medium;
        padding: 0px;
        color: windowtext;
        font-size: 10.0pt;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        font-family: Arial;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        height: 23pt;
    }
    .style6
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
        border-right: .5pt solid windowtext;
        background: #FFFFFF;
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
    .style9
    {
        border-style: none;
        border-color: inherit;
        border-width: medium;
        padding: 0px;
        color: windowtext;
        font-size: 16.0pt;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: center;
        vertical-align: top;
        white-space: normal;
        width: 408pt;
        height: 47pt;
    }
    .style10
    {
        padding: 0px;
        color: windowtext;
        font-size: 10.0pt;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        font-family: Arial;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        border-right: .5pt solid windowtext;
        height: 47pt;
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
    .style11
    {
        padding: 0px;
        color: windowtext;
        font-size: 16.0pt;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        border-left: .5pt solid windowtext;
        height: 47pt;
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
    .style12
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
        font-family: Arial;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        height: 47pt;
    }
    .style13
    {
        font-size: xx-large;
        text-align: center;
    }
    .style14
    {
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
        border-left: .5pt solid windowtext;
        height: 32pt;
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
    .style15
    {
        height: 32pt;
    }
    .style16
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
        border-right: .5pt solid windowtext;
        height: 32pt;
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
    .style17
    {
        padding: 0px;
        color: windowtext;
        font-size: small;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        font-family: Arial, sans-serif;
        text-align: general;
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
-->
</style>
</head>

<body>

<form action="Cancel-Reissue.php" method="POST">

<table cellspacing="0" cellpadding="0" class="excel6">
  <col width="16" style="width:12pt;" />
  <col width="39" style="width:29pt;" />
  <col width="20" style="width:15pt;" />
  <col width="16" span="37" style="width:12pt;" />
  <col width="55" style="width:41pt;" />
  <col width="16" span="2" style="width:12pt;" />
  <col width="16" style="width:12pt;" />
  <tr style="height:12.75pt;">
    <td class="excel210" width="16" style="height:12.75pt;width:12pt;"><a name="RANGE!A1:AR119" id="RANGE!A1:AR119">&nbsp;</a></td>
    <td class="excel195" width="39" style="width:29pt;">&nbsp;</td>
    <td class="excel195" width="20" style="width:15pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="55" style="width:41pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel195" width="16" style="width:12pt;">&nbsp;</td>
    <td class="excel122" width="16" style="width:12pt;">&nbsp;</td>
  </tr>
  <tr>
    <td class="style11"></td>
    <td class="style12"></td>
    <td class="style12"></td>
    <td class="style12"></td>
    <td class="style12"></td>
    <td class="style12"></td>
    <td colspan="34" class="style9" width="544"><span class="style13">&nbsp; <u>CANCELLATION AND/OR RE- ISSUE OF CHEQUES </ul></span><br /></td>
    <td class="style12"></td>
    <td class="style12"></td>
    <td class="style12"></td>
    <td class="style10"></td>
  </tr>
  <tr style="height:18.0pt;">
    <td class="excel250" style="height:18.0pt;">&nbsp;</td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel245">&nbsp;</td>
  </tr>
  <tr>
    <td class="style1"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td class="style2"></td>
    <td></td>
    <td ></td>
    <td ></td><td class="excel245">&nbsp;</td>
  </tr>
  <tr style="height:12.0pt;">
    <td colspan="6" class="excel255" style="height:12.0pt;">Department Name</td>
    <td colspan="20" class="excel306">
          :<u><?php echo "$department"; ?></u>
            </td>
    
    <td>&nbsp;</td>

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
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="style6">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" colspan="2" align="left" style="height:12.75pt;">Office </td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td colspan="20" class="excel306">
       :<u><?php echo "$office"; ?></u></td>
    <td>&nbsp;</td>
    <td  colspan="5"></td>
    <td class="excel131"></td>
    <td class="excel132">&nbsp;</td>
    <td class="excel201">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel201">&nbsp;</td>
    <td class="excel201">&nbsp;</td>
    <td class="excel132">&nbsp;</td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="6" class="excel339" style="height:12.75pt;">Beneficiary Name</td>
    <td colspan="20" class="excel306">
       :<u><?php echo "$beneficiary_name"; ?></u></td>
    
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="10" class="excel255" style="height:12.75pt;">Reasons for Canceling Cheque:</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td  colspan="6" align="left"></td>
    <td class="excel204">&nbsp;</td>
    <td class="excel201">&nbsp;</td>
    <td class="excel205">&nbsp;</td>
    <td class="excel205">&nbsp;</td>
    <td class="excel205">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td colspan="12" </td>
    <td ></td>
    <td>&nbsp;</td>
   <td class="excel185">&nbsp;</td>
  </tr>
  <tr style="height:14.25pt;">
    <td class="excel152" style="height:14.25pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel182">
        <input type="radio" name="R1" <?php if($reason_canceling == 'Beneficiary_Details_Wrong') {echo "checked";} ?> /></td>
    <td class="excel31" colspan="10" align="left">Beneficiary Details Wrong </td>
    <td class="excel31"></td>
    <td class="excel220"></td>
    <td class="excel220"></td>
    <td class="excel220"></td>
    <td class="excel31"></td>
    <td class="excel182">
        <input  type="radio" name="R1" value="Faulty Amount" <?php if($reason_canceling == 'Faulty_Amount') {echo "checked";} ?>/></td>
    <td class="excel31" colspan="6" align="left">Faulty Amount </td>
    <td class="excel31"></td>
    <td class="excel220"></td>
    <td class="excel220"></td>
    <td class="excel220"></td>
    <td class="excel220"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel233" style="border-top:none;">&nbsp;</td>
    <td class="excel220"></td>
    <td class="excel220"></td>
    <td class="excel225">&nbsp;</td>
  </tr>
  <tr style="height:14.25pt;">
    <td class="excel152" style="height:14.25pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel182" style="border-top:none;">
        <input  name="R1" type="radio" value="Damaged Warrant Voucher" <?php if($reason_canceling == 'Damaged_Warant_vouncher') {echo "checked";} ?> /></td>
    <td class="excel31" colspan="10" align="left">Damaged Warrant Voucher </td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel182" style="border-top:none;">
        <input name="R1" type="radio" value="Lost Warrant Voucher" <?php if($reason_canceling == 'Lost_Warrant_Voucher') {echo "checked";} ?> /></td>
    <td class="excel31" colspan="9" align="left">Lost Warrant    Voucher </td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel185">&nbsp;</td>
  </tr>
  <tr style="height:14.25pt;">
    <td class="excel152" style="height:14.25pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel153">
        <input  name="R1" type="radio" value="Double Payment" <?php if($reason_canceling == 'Double_Payment') {echo "checked";} ?> /></td>
    <td class="excel31" colspan="7" align="left">Double    Payment </td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel153">
        <input name="R1" type="radio" value="Stale Warrant Voucher" <?php if($reason_canceling == 'Stale_Warrant_Voucher') {echo "checked";} ?> /></td>
    <td class="excel31" colspan="9" align="left">Stale Warrant Voucher </td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel185">&nbsp;</td>
  </tr>
  <tr style="height:14.25pt;">
    <td class="excel152" style="height:14.25pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel182">
        <input name="R1" type="radio" value="Other reasons" <?php if($reason_canceling == 'Other reasons') {echo "checked";} ?> /></td>
    <td class="excel31" colspan="5" align="left">Other</td>
        <td colspan="20" class="excel306">
       :<u><?php echo "$other"; ?></u></td>
        <td></td>
         <td></td> <td></td>
        <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="30" class="excel307"></td><td class="excel148">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel148">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="40" class="excel268" style="height:12.75pt;">Original Cheque    Details </td>
    <td class="excel221" style="border-top:none;">&nbsp;</td>
    <td class="excel221" style="border-top:none;">&nbsp;</td>
    <td class="excel221" style="border-top:none;">&nbsp;</td>
    <td class="excel209" style="border-top:none;">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel224" style="height:12.75pt;">&nbsp;</td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel227"></td>
    <td class="excel251" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="6" class="excel255" style="height:12.75pt;">Disbursement    Number </td>
    <td class="excel31"></td>
        <td colspan="20" class="excel306">
       :<u><?php echo "$disbursement_no"; ?></u></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" colspan="5" align="left" style="height:12.75pt;">Cheque Number </td>
    <td class="excel31"></td>
    <td class="excel31"></td>
        <td colspan="20" class="excel306">
       :<u><?php echo "$cheque_no"; ?></u></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td></td>
    <td></td><td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" colspan="4" align="left" style="height:12.75pt;">Cheque Date </td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
       <td colspan="20" class="excel306">
       :<u><?php echo "$cheque_date1"; ?></u></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel152" colspan="2" align="left" style="height:13.5pt;">Amount </td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel208" align="left">R</td>
        <td colspan="20" class="excel306">
       <u><?php echo "$amount1"; ?></u></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel194" style="height:13.5pt;">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel147">&nbsp;</td>
    <td class="excel147">&nbsp;</td>
    <td class="excel147">&nbsp;</td>
    <td class="excel147">&nbsp;</td>
    <td class="excel147">&nbsp;</td>
    <td class="excel147">&nbsp;</td>
    <td class="excel147">&nbsp;</td>
    <td class="excel147">&nbsp;</td>
    <td class="excel147">&nbsp;</td>
    <td class="excel147">&nbsp;</td>
    <td class="excel147">&nbsp;</td>
    <td class="excel147">&nbsp;</td>
    <td class="excel147">&nbsp;</td>
    <td class="excel231">&nbsp;</td>
    <td class="excel147">&nbsp;</td>
    <td class="excel147">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel219"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td></td>
    <td></td>
    <td class="excel122">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel148">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="40" class="excel268" style="height:12.75pt;">Cancellation/    Reprint Options </td>
    <td class="excel221" style="border-top:none;">&nbsp;</td>
    <td class="excel221" style="border-top:none;">&nbsp;</td>
    <td class="excel221" style="border-top:none;">&nbsp;</td>
    <td class="excel209" style="border-top:none;">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="7" class="excel285" style="height:12.75pt;">Disbursement Type</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel223" style="border-top:none;">&nbsp;</td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
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
    <td class="excel222"></td>
    <td class="excel122">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel182">
        <input id="Disbursement" name="R2" type="radio" <?php if($disbursement_type == 'Disbursement') {echo "checked";} ?> /></td>
    <td colspan="5" class="excel211" style="border-left:none;">Disbursement</td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel182">
        <input id="nterface" name="R2" type="radio"  <?php if($disbursement_type == 'Interface') {echo "checked";} ?> /></td>
    <td class="excel31" colspan="4" align="left">Interface</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel182">
        <input id="Departmental Transfer" name="R2" type="radio" <?php if($disbursement_type == 'Departmental Transfer') {echo "checked";} ?>  /></td>
    <td class="excel31" colspan="9" align="left">Departmental    Transfer</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel222"></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel194" style="height:12.75pt;">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel229">&nbsp;</td>
    <td class="excel148">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="6" class="excel285" style="height:12.75pt;">Re-issue Options</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel157" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel32" style="border-top:none;">&nbsp;</td>
    <td class="excel223" style="border-top:none;">&nbsp;</td>
    <td class="excel190" style="border-top:none;">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td align="left" valign="top"><img src="../../AppData/Roaming/Adobe/Dreamweaver CS6/en_US/OfficeImageTemp/clip_image002_0034.png" alt="" width="23" height="23" />
      <table cellpadding="0" cellspacing="0">
        <tr>
          <td width="39" style="height:12.75pt;width:29pt;"></td>
        </tr>
      </table></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
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
    <td class="excel222"></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel182">
        <input id="Cancel (default)" name="R3" type="radio" 
            <?php if($re_issue_options == 'Cancel (default)') {echo "checked";} ?>  /></td>
    <td class="excel188" colspan="6">Cancel (default)</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel182">
        <input id="Reprint " name="R3" type="radio" <?php if($re_issue_options == 'Reprint') {echo "checked";} ?> /></td>
    <td class="excel31" colspan="3" align="left">Reprint </td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel182">
        <input id="ssue EBT" name="R3" type="radio"  <?php if($re_issue_options == 'Issue EBT)') {echo "checked";} ?>  /></td>
    <td class="excel31" colspan="4" align="left">Issue EBT </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td class="excel182">
        <input id="Manual Cheque" name="R3" type="radio" 
             <?php if($re_issue_options == 'Manual Cheque') {echo "checked";} ?>  /></td>
    <td class="excel31" colspan="6" align="left">Manual    Cheque </td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel222"></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel194" style="height:12.75pt;">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel148">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="22" class="excel338" dir="ltr" style="height:12.75pt;">*NB:    Re-issue Options is not available for Interface and Departmental    Transfer. </td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel219"></td>
    <td class="excel219"></td>
    <td class="excel219"></td>
    <td class="excel219"></td>
    <td class="excel219"></td>
    <td class="excel219"></td>
    <td class="excel219"></td>
    <td class="excel219"></td>
    <td></td>
    <td></td>
    <td class="excel222"></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel211" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel197"></td>
    <td class="excel219"></td>
    <td class="excel219"></td>
    <td class="excel219"></td>
    <td class="excel219"></td>
    <td class="excel219"></td>
    <td class="excel219"></td>
    <td class="excel219"></td>
    <td class="excel219"></td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel229">&nbsp;</td>
    <td class="excel148">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="40" class="excel268" style="height:12.75pt;">Payment Method</td>
    <td class="excel260">&nbsp;</td>
    <td class="excel221" style="border-top:none;">&nbsp;</td>
    <td class="excel261" style="border-top:none;">&nbsp;</td>
    <td class="excel209" style="border-top:none;">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
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
    <td colspan="23" class="excel288">Manual Cheque Details</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td></td>
    <td class="excel222"></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" colspan="2" align="left" style="height:12.75pt;">EBT</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel206">
        <input id="EBT" name="R4" type="radio"  <?php if($payment_method == 'EBT') {echo "checked";} ?>  /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel191">&nbsp;</td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="6" class="excel255" style="height:12.75pt;">Manual Cheque</td>
    <td></td>
    <td class="excel207">
        <input id="Manual Cheque" name="R4" type="radio" <?php if($payment_method == 'Manual_Cheque') {echo "checked";} ?> /></td>
    <td class="excel138"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel152" colspan="5" align="left">Cheque Date</td>
        <td colspan="20" class="excel306">
       :<u><?php echo "$cheque_date2"; ?></u></td>
    <td colspan="6"></td>
    <td class="excel188"></td>
    <td class="excel188"></td><td class="excel188"></td><td class="excel188"></td>
    <td class="excel188"></td>
    <td class="excel259">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="6" class="excel255" style="height:12.75pt;">System Cheque</td>
    <td></td>
    <td class="excel183">
        <input id="System Cheque" name="R4" type="radio" <?php if($payment_method == 'System Cheque') {echo "checked";} ?> /></td>
    <td class="excel138"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel152" colspan="5" align="left">MICR Number</td>
        <td colspan="20" class="excel306">
       :<u><?php echo "$micr_no"; ?></u></td>
    <td class="excel191" style="border-left:none;">&nbsp;</td>
    <td></td><td ></td><td class="excel188"></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel138"></td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel152" colspan="4" align="left">Amount</td>
    <td></td>
       <td colspan="20" class="excel306">
       <u><?php echo "R$amount2"; ?></u></td>
    <td></td>
    <td></td>
    <td></td>  <td></td>
    <td></td>  
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel199" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel138"></td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel192"></td>
    <td class="excel192"></td>
    <td class="excel192"></td>
    <td class="excel192"></td>
    <td class="excel192"></td>
    <td class="excel192"></td>
    <td class="excel192"></td>
    <td class="excel192"></td>
    <td class="excel192"></td>
    <td class="excel192"></td>
    <td class="excel192"></td>
    <td class="excel192"></td>
    <td class="excel192"></td>
    <td class="excel193"></td>
    <td class="excel192"></td>
    <td class="excel192"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td colspan="10" class="excel265" style="border-right:.5pt solid black;height:13.5pt;">Compiled By</td>
    <td colspan="10" class="excel265" style="border-right:.5pt solid black;border-left:none;">Checked and Verified By </td>
    <td colspan="10" class="excel265" style="border-right:.5pt solid black;border-left:none;">Expenditure Authorised by </td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td colspan="10" class="excel289" style="border-right:.5pt solid black;height:13.5pt;">
       <u><?php echo "$compiled_by"; ?></u></td>
    <td colspan="10" class="excel289" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$checked_by"; ?></u></td>
    <td colspan="10" class="excel289" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$authorised_by"; ?></u></td>
    <td colspan="9" width="144" style="height:13.5pt;width:108pt;"><img src="../../AppData/Roaming/Adobe/Dreamweaver CS6/en_US/OfficeImageTemp/clip_image004_0024.png" alt="" width="130" height="1" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel238" style="height:13.5pt;">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel240">&nbsp;</td>
    <td class="excel238" style="border-left:none;">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel240">&nbsp;</td>
    <td class="excel238" style="border-left:none;">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel239">&nbsp;</td>
    <td class="excel240">&nbsp;</td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="10" class="excel270" style="border-right:.5pt solid black;height:12.75pt;">Rank</td>
    <td colspan="10" class="excel270" style="border-right:.5pt solid black;border-left:none;">Rank</td>
    <td colspan="10" class="excel270" style="border-right:.5pt solid black;border-left:none;">Rank</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel217"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td colspan="10" class="excel292" style="border-right:.5pt solid black;height:13.5pt;">
        <u><?php echo "$rank1"; ?></u></td>
    <td colspan="10" class="excel292" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$rank2"; ?></u></td>
    <td colspan="10" class="excel292" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$rank3"; ?></u></td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel243" style="height:13.5pt;">&nbsp;</td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel241">&nbsp;</td>
    <td class="excel236" style="border-left:none;">&nbsp;</td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel241">&nbsp;</td>
    <td class="excel236" style="border-left:none;">&nbsp;</td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel237"></td>
    <td class="excel241">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel216"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td colspan="10" class="excel265" style="border-right:.5pt solid black;height:13.5pt;">Signature</td>
    <td colspan="10" class="excel265" style="border-right:.5pt solid black;border-left:none;">Signature</td>
    <td colspan="10" class="excel265" style="border-right:.5pt solid black;border-left:none;">Signature</td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
 
  <tr style="height:13.5pt;">
    <td colspan="10" class="excel292" style="border-right:.5pt solid black;height:13.5pt;">
        <u><?php //echo "$signature1"; ?></u></td>
    <td colspan="10" class="excel292" style="border-right:.5pt solid black;border-left:none;">
        <u><?php//echo "$signature2"; ?></u></td>
    <td colspan="10" class="excel292" style="border-right:.5pt solid black;border-left:none;">
        <u><?php //echo "$signature3"; ?></u></td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel243" style="height:13.5pt;">&nbsp;</td>
    <td class="excel235">&nbsp;</td>
    <td class="excel242">&nbsp;</td>
    <td class="excel235">&nbsp;</td>
    <td class="excel235">&nbsp;</td>
    <td class="excel235">&nbsp;</td>
    <td class="excel242">&nbsp;</td>
    <td class="excel242">&nbsp;</td>
    <td class="excel242">&nbsp;</td>
    <td class="excel246">&nbsp;</td>
    <td class="excel243" style="border-left:none;">&nbsp;</td>
    <td class="excel235">&nbsp;</td>
    <td class="excel242">&nbsp;</td>
    <td class="excel235">&nbsp;</td>
    <td class="excel235">&nbsp;</td>
    <td class="excel235">&nbsp;</td>
    <td class="excel242">&nbsp;</td>
    <td class="excel242">&nbsp;</td>
    <td class="excel242">&nbsp;</td>
    <td class="excel246">&nbsp;</td>
    <td class="excel243" style="border-left:none;">&nbsp;</td>
    <td class="excel235">&nbsp;</td>
    <td class="excel242">&nbsp;</td>
    <td class="excel235">&nbsp;</td>
    <td class="excel235">&nbsp;</td>
    <td class="excel235">&nbsp;</td>
    <td class="excel242">&nbsp;</td>
    <td class="excel242">&nbsp;</td>
    <td class="excel242">&nbsp;</td>
    <td class="excel246">&nbsp;</td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td colspan="10" class="excel265" align="left" style="border-right:.5pt solid black;height:13.5pt;">Date </td>
    <td colspan="10" class="excel265" align="left" style="border-right:.5pt solid black;border-left:none;">Date</font></td>
    <td colspan="10" class="excel265" align="left" style="border-right:.5pt solid black;border-left:none;">Date</font></td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:15.0pt;">
    <td colspan="10" class="excel279" style="border-right:.5pt solid black;height:15.0pt;">
        <u><?php echo "$date1"; ?></u></td>
    <td colspan="10" class="excel279" style="border-right:.5pt solid black;border-left:none;">
        <u><?php echo "$date2"; ?></u></td>
    <td colspan="10" class="excel279" style="border-right:.5pt solid black;border-left:none;">
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
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="10" class="excel274" style="height:12.75pt;">&nbsp;</td>
    <td colspan="10" class="excel275">&nbsp;</td>
    <td colspan="10" class="excel275">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel148">&nbsp;</td>
  </tr>
  <tr style="page-break-before:always;height:12.75pt;">
    <td class="excel210" style="height:12.75pt;border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel244" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel195" style="border-top:none;">&nbsp;</td>
    <td class="excel122" style="border-top:none;">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
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
    <td class="excel197"></td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
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
    <td class="excel197"></td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td></td>
    <td class="excel197"></td>
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
    <td class="excel197"></td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="40" class="style14"><u>BAS    INDEMNITY</u></td>
    <td class="style15"></td>
    <td class="style15"></td>
    <td class="style15"></td>
    <td class="style16"></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
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
    <td class="excel154"></td>
    <td class="excel154"></td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
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
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
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
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
    <td class="excel198"></td>
    <td></td>
    <td colspan="33" rowspan="3" class="excel334" align="left" width="528" style="width:396pt;">DECLARATION    BY THE PAYEE OF <font class="font9">CHEQUE WHICH WAS NOT RECEIVED</font><font class="font8"> BUT IS LOST, DESTROYED OR STOLEN AND OF WHICH THE VALIDITY HAS    NOT EXPIRED</font></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel248" style="height:12.75pt;">&nbsp;</td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel252" style="height:12.75pt;">&nbsp;</td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel230" style="height:12.75pt;">&nbsp;</td>
    <td class="excel196"></td>
    <td class="excel196"></td>
    <td class="excel196"></td>
    <td class="excel196"></td>
    <td class="excel196"></td>
    <td class="excel196"></td>
    <td class="excel196"></td>
    <td class="excel196"></td>
    <td class="excel196"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel215"></td>
    <td class="excel196"></td>
    <td class="excel196"></td>
    <td class="excel196"></td>
    <td class="excel196"></td>
    <td class="excel196"></td>
    <td class="excel196"></td>
    <td class="excel196"></td>
    <td class="excel196"></td>
    <td class="excel196"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel215"></td>
    <td class="excel196"></td>
    <td class="excel196"></td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="40" class="excel303" style="height:12.75pt;">A. DECLARATION BY    AUTHORITY TO WHOM CHEQUE WAS ISSUED </td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel248" style="height:12.75pt;">&nbsp;</td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td class="excel217"></td>
    <td></td>
    <td class="excel216"></td>
    <td class="excel216"></td>
    <td class="excel216"></td>
    <td class="excel216"></td>
    <td class="excel216"></td>
    <td class="excel216"></td>
    <td class="excel216"></td>
    <td class="excel216"></td>
    <td class="excel216"></td>
    <td class="excel216"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel211" style="height:12.75pt;">&nbsp;</td>
    <td class="excel312" dir="ltr">I,</td>
   <td colspan="20" class="excel306">
       <u><?php echo "$fullnames"; ?></u></td>
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
   
    <td class="excel134"></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel253" style="height:12.75pt;">&nbsp;</td>
    <td colspan="2" class="excel341">on behalf of </td>
   <td colspan="20" class="excel306">
       <u><?php echo "$firm"; ?></u></td>
    <td class="excel313" colspan="3" align="left">
        <span style="font-size:10.0pt;font-family:Arial;
mso-ascii-font-family:Arial;mso-fareast-font-family:+mn-ea;mso-bidi-font-family:
Arial;mso-fareast-theme-font:minor-fareast;color:black;language:en-US;
font-weight:normal;font-style:normal;mso-style-textfill-type:solid;mso-style-textfill-fill-color:
black;mso-style-textfill-fill-alpha:100.0%"></span></td>
    <td class="excel213"></td>
    <td class="excel213"></td>
    <td class="excel213"></td>
    <td class="excel213"></td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel254" style="height:12.75pt;">&nbsp;</td>
    <td colspan="11" class="excel314">the undersigned, do hereby declare that cheque  number</td>
    <td colspan="2" class="excel306">
       <u><?php echo "$Dcheque_no"; ?></u></td>
    <td></td>
    <td></td>
     <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel224" style="height:12.75pt;"></td>
    <td class="excel314" align="left">dated</td>
	<td colspan="2" class="excel306">
    <u><?php echo "$Dcheque_date"; ?></td> 
	<td></td>
    <td class="excel314" colspan="2" align="left">for the amount of R</td>
    <td colspan="2" class="excel306">
       :<u><?php echo "$Dcheque_amount"; ?></td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
    <td colspan="12" class="excel312" dir="ltr">has not been received by me.</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel212"></td>
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
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    
    <td class="excel31"></td>
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
    <td></td>
  
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td colspan="38" rowspan="2" class="excel315" width="635" style="width:476pt;">In the    event that I should receive the relative cheque I hereby undertake to return    it immediately to the Department of State Expenditure</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel255" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:20.25pt;">
    <td class="excel191" style="height:20.25pt;">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel138"></td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel219"></td>
    <td class="excel7"></td>
    <td class="excel7"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td colspan="18" class="excel298" style="border-right:.5pt solid black;">&nbsp;</td>
    <td class="excel199" style="border-left:none;">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel148">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td colspan="18" class="excel274" style="border-right:.5pt solid black;">Signature of    Beneficiary </td>
    <td colspan="19" class="excel274" style="border-right:.5pt solid black;border-left:none;">Signature of Witness </td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td class="excel152" colspan="3" align="left">ID No. </td>
    
    <td colspan="13" class="excel274" style="border-right:.5pt solid black;">
        :<u><?php echo "$id_no1"; ?></td>
    <td class="excel134">&nbsp;</td>
	<td></td>
    <td class="excel152" colspan="0" align="left">ID No. </td>
    <td></td>
    <td></td>
    <td colspan="10" class="excel274" style="border-right:.5pt solid black;">
        :<u><?php echo "$id_no2"; ?></td>
    <td class="excel185">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel152" colspan="2" align="left">Date </td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td colspan="10" class="excel306" style="border-right:.5pt solid black;">
        :<u><?php echo "$Ddate1"; ?></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel134">&nbsp;</td>
    <td class="excel152" colspan="2" align="left">Date </td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td colspan="10" class="excel306" style="border-right:.5pt solid black;">
        :<u><?php echo "$Ddate2"; ?></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel185">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td class="excel152" colspan="4" align="left">Address: </td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel134">&nbsp;</td>
    <td class="excel152" colspan="4" align="left">Address: </td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td class="excel317">&nbsp;</td>
    <td colspan="16" rowspan="5" class="excel333" style="border-bottom:.5pt solid black;">
        <textarea id="adress beneficiary" placeholder="<?php echo "$address1"; ?>" style="height: 79px; width: 447px"></textarea></td>
    <td class="excel319">&nbsp;</td>
    <td class="excel191" style="border-left:none;">&nbsp;</td>
    <td colspan="17" rowspan="5" class="excel333" style="border-bottom:.5pt solid black;">
        <textarea id="address witness" name="address2" placeholder="<?php echo "$address2"; ?>" style="height: 79px; width: 447px"></textarea></td>
    <td class="excel134">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td class="excel320">&nbsp;</td>
    <td class="excel319">&nbsp;</td>
    <td class="excel191" style="border-left:none;">&nbsp;</td>
    <td class="excel134">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel317">&nbsp;</td>
    <td class="excel319">&nbsp;</td>
    <td class="excel191" style="border-left:none;">&nbsp;</td>
    <td class="excel134">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
    <td></td>
    <td class="excel320">&nbsp;</td>
    <td class="excel319">&nbsp;</td>
    <td class="excel191" style="border-left:none;">&nbsp;</td>
    <td class="excel185">&nbsp;</td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel317">&nbsp;</td>
    <td class="excel319">&nbsp;</td>
    <td class="excel191" style="border-left:none;">&nbsp;</td>
    <td class="excel185">&nbsp;</td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel322">&nbsp;</td>
    <td class="excel318">&nbsp;</td>
    <td class="excel318">&nbsp;</td>
    <td class="excel318">&nbsp;</td>
    <td class="excel318">&nbsp;</td>
    <td class="excel318">&nbsp;</td>
    <td class="excel321">&nbsp;</td>
    <td class="excel321">&nbsp;</td>
    <td class="excel318">&nbsp;</td>
    <td class="excel318">&nbsp;</td>
    <td class="excel318">&nbsp;</td>
    <td class="excel318">&nbsp;</td>
    <td class="excel318">&nbsp;</td>
    <td class="excel318">&nbsp;</td>
    <td class="excel318">&nbsp;</td>
    <td class="excel318">&nbsp;</td>
    <td class="excel318">&nbsp;</td>
    <td class="excel323">&nbsp;</td>
    <td class="excel199" style="border-left:none;">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel189">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel187">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel134">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel256" colspan="2" align="left" style="height:12.75pt;">NB.</td>
    <td colspan="24" class="excel219">THE FIRM'S STAMP SHOULD APPEAR ON THIS APPLICATION</td>
    <td class="excel198"></td>
    <td class="excel198"></td>
    <td class="excel198"></td>
    <td class="excel198"></td>
    <td class="excel198"></td>
    <td class="excel198"></td>
    <td class="excel198"></td>
    <td class="excel198"></td>
    <td class="excel198"></td>
    <td class="excel198"></td>
    <td class="excel198"></td>
    <td class="excel198"></td>
    <td class="excel198"></td>
    <td class="excel198"></td>
    <td class="excel198"></td>
    <td class="excel198"></td>
    <td class="excel200"></td>
    <td class="excel257">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel191" style="height:12.75pt;">&nbsp;</td>
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
    <td></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td class="excel258">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="style17" colspan="2" align="left" style="height:12.75pt;">B.</td>
    <td colspan="8" class="excel219">FOR OFFICIAL USE </td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="excel185">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td colspan="29" rowspan="2" class="excel179" width="468" style="width:351pt;">All the    stipulations of Chapter H 4.10.1 (a) (I) and (ii) of the Treasury    Instructions have been complied with and the issue of replacement warrant    voucher number </td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel185">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel185">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel224" style="height:12.75pt;">&nbsp;</td>
    <td class="excel154"></td>
    <td colspan="12" class="excel324" width="196" style="width:147pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel325" width="16" style="width:12pt;"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel185">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel224" style="height:12.75pt;">&nbsp;</td>
    <td class="excel154"></td>
    <td class="excel313" colspan="2" align="left">dated </td>
    <td colspan="11" class="excel306">
        :<u><?php echo "$office_date"; ?></ul></td>
    <td colspan="8" class="excel165" dir="ltr">is hereby authorised.</td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel185">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel224" style="height:12.75pt;">&nbsp;</td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel185">&nbsp;</td>
  </tr>
  <tr style="height:21.75pt;">
    <td class="excel152" style="height:21.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td colspan="10" class="excel326" style="border-right:.5pt solid black;">Expenditure    Authorised by</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel185">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td colspan="10" class="excel306" style="border-right:.5pt solid black;">
        <u><?php echo "$Oauthorised_by"; ?></ul></td>
    <td class="excel198"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel154"></td>
    <td class="excel258">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td colspan="10" class="excel297" style="border-right:.5pt solid black;">Rank</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel185">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td colspan="10" class="excel306" style="border-right:.5pt solid black;">
        <u><?php echo "$Orank"; ?></ul></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel185">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td colspan="10" class="excel296" style="border-right:.5pt solid black;">Signature </td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel185">&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel152" style="height:12.75pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td colspan="10" class="excel306" style="border-right:.5pt solid black;">
        <u><?php //echo "$Osignature"; ?></ul></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel185">&nbsp;</td>
  </tr>
  <tr style="height:13.5pt;">
    <td class="excel152" style="height:13.5pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td colspan="10" class="excel264" align="left" style="border-right:.5pt solid black;">Date</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel185">&nbsp;</td>
  </tr>
  <tr style="height:15.0pt;">
    <td class="excel152" style="height:15.0pt;">&nbsp;</td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td colspan="10" class="excel306" style="border-right:.5pt solid black;">
        <u><?php echo "$Odate"; ?></ul></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel185">&nbsp;</td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel194" style="height:11.25pt;">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel186">&nbsp;</td>
    <td class="excel187">&nbsp;</td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel31" style="height:11.25pt;"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
    <td class="excel31"></td>
  </tr>
</table>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

<html xmlns="http://www.w3.org/1999/xhtml"><script language="javascript" type="text/javascript">                                                                 </script></html>
<html xmlns="http://www.w3.org/1999/xhtml"><script language="javascript" type="text/javascript">                                                                 </script></html>
