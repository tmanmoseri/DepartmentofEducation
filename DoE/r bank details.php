<?php

if(isset($_REQUEST['submit'])) {
	
	$id = $_GET['search'] ;
	
	
	mysql_connect ("localhost", "root", "") or die ("connection failed");
	mysql_select_db("test");
	
	$query ="SELECT * FROM bank_details WHERE id='$id'";
	
	if($query === FALSE) {
		echo "didn't search";   // die(mysql_error());		
 
	}
	
	$query=mysql_query($query);
	$num = mysql_num_rows($query);
	
	if($num==0)
		{
			header('location: s bank details.html ');
			
			//echo "<h3>no results found</h3>";
		}
		else
		{
	while ($rec = mysql_fetch_array($query, MYSQL_ASSOC)){
	
							$id1					= $rec["id"];
							$surname_initials		= $rec["surname_initials"];
							$authorised_signature	= $rec["authorised_signature"];
							$date 					= $rec["date"];
							$bank_name 				= $rec["bank_name"];
							$branch					= $rec["branch"];
							$branch_code			= $rec["branch_code"];
							$acc_no					= $rec["acc_no"];
							$acc_type				= $rec["acc_type"];
							$other					= $rec["other"];
							$address				= $rec["address"];
							$date_stamp				= $rec["date_stamp"];
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
.excel2 {
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
.excel7 {
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
.excel17 {
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
.excel19 {
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
border-left:none;
background:silver;
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
}
.excel32 {
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
.font7 {
color:windowtext;
font-size:9.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
}
.font5 {
color:windowtext;
font-size:8.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
}
.excel16 {
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
.excel4 {
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
.excel15 {
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
.excel11 {
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
.excel30 {
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
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
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
text-align:center;
vertical-align:bottom;
border:none;
white-space:nowrap;
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
}
.excel27 {
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
.excel28 {
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
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel21 {
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
.excel22 {
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
border-left:none;
}
.excel23 {
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
border-right:.5pt solid windowtext;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel20 {
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
.excel18 {
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
border-left:none;
background:silver;
}
.excel24 {
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
background:silver;
}
.font6 {
color:windowtext;
font-size:8.0pt;
font-weight:400;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
}
.excel3 {
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
.excel10 {
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
.excel5 {
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
.excel29 {
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
border-right:.5pt solid windowtext;
border-bottom:none;
border-left:none;
}
.excel9 {
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
.excel14 {
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
.excel31 {
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
border-bottom:none;
border-left:none;
}
.excel8 {
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
-->
</style>
<style type="text/css">
<!--
.excel12 {
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
.excel13 {
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
.excel62 {
padding:0px;
color:windowtext;
font-size:16.0pt;
font-weight:700;
font-style:normal;
text-decoration:none;
font-family:Arial, sans-serif;
text-align:center;
vertical-align:middle;
border:none;
white-space:nowrap;
}
.excel35 {
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
border-top:.5pt solid windowtext;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:.5pt solid windowtext;
background:silver;
}
.excel34 {
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
.excel60 {
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
.excel61 {
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
.excel38 {
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
border:none;
white-space:nowrap;
border-top:none;
border-right:none;
border-bottom:.5pt solid windowtext;
border-left:none;
}
.excel44 {
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
.excel49 {
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
.excel39 {
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
.excel53 {
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
.excel25 {
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
.excel52 {
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
.excel55 {
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
.excel36 {
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
    #Date
    {
        width: 148px;
    }
    #Text1
    {
        width: 427px;
        margin-left: 0px;
    }
    .style1
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
        vertical-align: middle;
        white-space: nowrap;
    }
-->
</style>

<form action="ENTITY BANK DETAILS.php" method="POST">
<table cellspacing="0" cellpadding="0" class="excel12">
  <col width="15" style="width:11pt;" />
  <col width="15" span="40" style="width:11pt;" />
  <col width="14" style="width:11pt;" />
  
  <tr style="height:12.75pt;">
    <td style="height:12.75pt;" align="left" valign="top">
        &nbsp;</td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td colspan="17" rowspan="2" class="style1"><u>ENTITY MAINTENANCE<u/></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:20.25pt;">
    <td class="excel35" style="height:20.25pt;"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
    <td class="excel35"></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel13" style="height:12.75pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel13" style="height:12.75pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel13" style="height:12.75pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="39" class="excel42" style="height:12.75pt;">Bank Details</td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel34" colspan="6" style="height:12.75pt;">The Director General : 
        Department of</td>
    <td colspan="28" class="excel60">
        <u><?php //echo "$department"; ?></u></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td colspan="30" rowspan="15" class="excel61" width="525" style="height:171.75pt;width:385pt;"><font class="font7">I/We hereby request and authorise you to pay    any amounts which any accrue to me/us to the credit of my/our account with    the mentioned bank.<br />
      <br />
      I/We understand that the credit transfers hereby authorised will be    processed by computer through a system know as the &quot;ACB ELECTRONIC FUND    TRANSFER SERVICE&quot;, and I/We also understand that no additional advice of    payment will be provided by my/our bank, but details of each payment will be    printed on my/our bank statement or any accompanying voucher.(This does not    apply where it is not customary for banks to furnish bank statements).<br />
      <br />
      I/we understand that a payment advice will be supplied by the Department in    the normal way, and that it will indicate the date on which funds will be    available in my/our account.This authority may be cancelled by me/us by    giving thirty days notice by prepaid registered post.</font><font class="font5"><br />
        <br />
      </font></td>
    <td class="excel38" width="15" style="width:11pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel38" width="15" style="height:11.25pt;width:11pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel38" width="15" style="height:11.25pt;width:11pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel38" width="15" style="height:11.25pt;width:11pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel38" width="15" style="height:11.25pt;width:11pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel38" width="15" style="height:11.25pt;width:11pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel38" width="15" style="height:11.25pt;width:11pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel38" width="15" style="height:11.25pt;width:11pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel38" width="15" style="height:11.25pt;width:11pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel38" width="15" style="height:11.25pt;width:11pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel38" width="15" style="height:11.25pt;width:11pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel38" width="15" style="height:11.25pt;width:11pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel38" width="15" style="height:11.25pt;width:11pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel38" width="15" style="height:12.75pt;width:11pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel13" style="height:12.75pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:12.75pt;">
    <td class="excel33" style="height:12.75pt;">&nbsp;</td>
    <td class="excel33">&nbsp;</td>
    <td class="excel33">&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td ></td>
    <td ></td>
    <td ></td>
    <td class="excel13"></td>
     <td class="excel13"></td>
    <td class="excel13"></td>
    <td >&nbsp;</td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td ></td>
    <td ></td>
    <td ></td>
    <td ></td>
    <td >&nbsp;</td>
    <td ></td>
    <td ></td>
    <td ></td>
    <td ></td>
    <td >&nbsp;</td>
    <td>&nbsp;</td>
    <td >&nbsp;</td>
    <td>&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
  </tr>
  <tr style="height:12.75pt;">
    <td colspan="10">
        <u><?php echo "$surname_initials"; ?></u></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td colspan="10">
        <u><?php echo "$authorised_signature"; ?></u></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td colspan="10">
        <u><?php echo "$date"; ?></u></td>
  </tr>
  <tr style="height:11.25pt;">
    <td colspan="10" class="excel39" style="border-right:.5pt solid black;height:11.25pt;">Initials and Surname</td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td colspan="10" class="excel39" style="border-right:.5pt solid black;">Authorised    Signature</td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td colspan="10" class="excel39" style="border-right:.5pt solid black;">Date</td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td colspan="4"><b>Name    of Bank</b></td>
    
    <td colspan="32">
        :<u><?php echo "$bank_name"; ?></u></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td colspan="4"><b>Name of Branch</b></td>
    
    <td colspan="32">
        :<u><?php echo "$branch"; ?></u></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td " colspan="4" style="height:11.25pt;"><b>Branch    Code</b></td>
    
    <td colspan="9" style="text-align: left">
        :<u><?php echo "$branch_code"; ?></u></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td><td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td " colspan="4" style="height:11.25pt;"><strong>Account    Number</strong></td>
    <td colspan="15">
        :<u><?php echo "$acc_no"; ?></u></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" colspan="2" style="height:11.25pt; font-weight: 700"><strong>Type of Account</strong></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    
    <td colspan="7" >
        <input id="Current Account" name="R1" type="radio" <?php if($acc_type == 'Current Acount') {echo "checked";} ?> />Current Account</td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td>
        &nbsp;</td>
    <td colspan="9" class="excel52" style="border-right:.5pt solid black;border-left:none;">
        <input id="Other(please specify)"  name="R1" type="radio" value="Other(please specify)" <?php if($acc_type == 'Other(please specify)') {echo "checked";} ?> />Other</td>
    <td colspan="12">
       :<u><?php echo "$other"; ?></u></td> <td class="excel13"></td>
    <td>
        &nbsp;</td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13">
        </td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    
    <td colspan="3">
        <input id="Savings Account" name="R1" type="radio" value="Savings Account" <?php if($acc_type == 'Savings Account') {echo "checked";} ?> />Savings 
        Account</td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td >
        &nbsp;</td>
    <td class="excel13" colspan="7">
        &nbsp;</td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    
    <td colspan="5">
        <input id="Transmission Account0" name="R1" type="radio" 
            value="Transmission Account1" <?php if($acc_type == 'Transmission Account1') {echo "checked";} ?> />Transmission 
        Account</td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td>
        &nbsp;</td>
    <td class="excel13" colspan="9">
        &nbsp;</td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" colspan="9" style="height:11.25pt;">DATE    STAMP OF BANK</td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" colspan="12" style="height:11.25pt;">BANK    ACCOUNT PARTICULARS</td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" colspan="9" style="height:11.25pt;">CERTIFIED    AS CORRECT</td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13" colspan="15">ADDRESS TO SEND THE PAYMENT STUB</td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td colspan="17" rowspan="10">
        <textarea id="CERTIFIED AS CORRECT" name="date_stamp" 
            style="height: 140px; width: 472px" placeholder="<?php echo "$date_stamp"; ?>" ></textarea></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td colspan="19" rowspan="10">
        <textarea id="ADDRESS TO SEND THE PAYMENT STUB" name="address" 
            style="height: 141px; width: 269px" placeholder="<?php echo "$address"; ?>" ></textarea></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel13" style="height:11.25pt;"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
    <td class="excel13"></td>
  </tr>
  <tr style="height:11.25pt;">
    <td class="excel36" style="height:11.25pt;"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
    <td class="excel36"></td>
  </tr>
</table>

</form>
<script><HTML>
<HEAD>
<TITLE>Untitled Document</TITLE>
</HEAD>

<BODY BGCOLOR="#FFFFFF">

</BODY>
</HTML>
</script>