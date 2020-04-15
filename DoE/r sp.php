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
			header('location: s sp.html ');
			
			//echo "<h3>no results found</h3>";
		}
		else
		{
	while ($rec = mysql_fetch_array($query, MYSQL_ASSOC)){
	
							$id1						= $rec["id"];
							$department					= $_POST ['department'];
							$DESCRIPTION				= $_POST ['DESCRIPTION'];
							$INITIALS					= $_POST ['INITIALS'];
							$supplier 					= $_POST ['supplier'];
							$ADDRESS					= $_POST ['ADDRESS'];
							$code						= $_POST ['code'];
							$doc_type					= $_POST ['R1'];
							$payment_method				= $_POST ['R2'];
							$payment_date				= $_POST ['payment_date'];
							$discount_date				= $_POST ['discount_date'];
							$discount_amount			= $_POST ['discount_amount'];
							$discount_percent			= $_POST ['discount_percent'];
							$cheque_no					= $_POST ['cheque_no'];
							$acc_no						= $_POST ['acc_no'];
							$branch_code				= $_POST ['branch_code'];
							$cheque_date				= $_POST ['cheque_date'];
							$acc_type					= $_POST ['acc_type'];
							$db_date					= $_POST ['db_date'];
							$a1							= $_POST ['a1'];
							$a2							= $_POST ['a2'];
							$a3							= $_POST ['a3'];
							$a4							= $_POST ['a4'];
							$a5							= $_POST ['a5'];
							$a6							= $_POST ['a6'];
							$a7							= $_POST ['a7'];
							$a8							= $_POST ['a8'];
							$b1							= $_POST ['b1'];
							$b2							= $_POST ['b2'];
							$b3							= $_POST ['b3'];
							$b4							= $_POST ['b4'];
							$b5							= $_POST ['b5'];
							$b6							= $_POST ['b6'];
							$b7							= $_POST ['b7'];
							$b8							= $_POST ['b8'];
							$c1							= $_POST ['c1'];
							$c2							= $_POST ['c2'];
							$c3							= $_POST ['c3'];
							$c4							= $_POST ['c4'];
							$c5							= $_POST ['c5'];
							$c6							= $_POST ['c6'];
							$c7							= $_POST ['c7'];
							$c8							= $_POST ['c8'];
							$d1							= $_POST ['d1'];
							$d2							= $_POST ['d2'];
							$d3							= $_POST ['d3'];
							$d4							= $_POST ['d4'];
							$d5							= $_POST ['d5'];
							$d6							= $_POST ['d6'];
							$d7							= $_POST ['d7'];
							$d8							= $_POST ['d8'];
							$e1							= $_POST ['e1'];
							$e2							= $_POST ['e2'];
							$e3							= $_POST ['e3'];
							$e4							=$_POST ['e4'];
							$e5							= $_POST ['e5'];
							$e6							= $_POST ['e6'];
							$e7							= $_POST ['e7'];
							$e8							= $_POST ['e8'];
							$f1							= $_POST ['f1'];
							$f2				= $_POST ['f2'];
							$f3		= $_POST ['f3'];
							$f4		= $_POST ['f4'];
							$f5			= $_POST ['f5'];
							$f6		= $_POST ['f6'];
							$f7				= $_POST ['f7'];
							$f8			= $_POST ['f8'];
							$g1			= $_POST ['g1'];
							$g2			= $_POST ['g2'];
							$g3			= $_POST ['g3'];
							$g4		= $_POST ['g4'];
							$g5		= $_POST ['g5'];
							$g6			= $_POST ['g6'];
							$g7		= $_POST ['g7'];
							$g8				= $_POST ['g8'];
							$checked_by			= $_POST ['checked_by'];
							$compiled_by			= $_POST ['compiled_by'];
							$authorised_by			= $_POST ['authorised_by'];
							$rank			= $_POST ['rank'];
							$rank1		= $_POST ['rank1'];
							$rank2		= $_POST ['rank2'];
							$signature			= $_POST ['signature'];
							$signature1		= $_POST ['signature1'];
							$signature2				= $_POST ['signature2'];
							$date1			= $_POST ['date1'];
							$date2			= $_POST ['date2'];
							$date3			= $_POST ['date3'];
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
        #TextArea1
        {
            height: 67px;
            width: 418px;
        }
        #Text1
        {
            width: 52px;
        }
        #Text2
        {
            width: 463px;
        }
        #Text3
        {
            width: 463px;
        }
        #Text4
        {
            width: 135px;
        }
        #Text5
        {
            width: 135px;
        }
        #Text6
        {
            width: 135px;
        }
        #Text7
        {
            width: 135px;
        }
        #Text8
        {
            width: 135px;
        }
        #Text9
        {
            width: 135px;
        }
        #Text10
        {
            width: 135px;
        }
        #Text11
        {
            width: 188px;
        }
        #Text12
        {
            width: 259px;
        }
        #Text13
        {
            width: 259px;
        }
        #Text14
        {
            width: 259px;
        }
        #Text15
        {
            width: 111px;
        }
        #Text16
        {
            width: 111px;
        }
        #Text17
        {
            width: 111px;
        }
        #Text18
        {
            width: 111px;
        }
        #Text19
        {
            width: 130px;
        }
        #Text20
        {
            width: 130px;
        }
        #Text21
        {
            width: 130px;
        }
        #Text22
        {
            width: 130px;
        }
        #Rank
        {
            width: 290px;
        }
        #Text12
        {
            width: 188px;
        }
        #Text13
        {
            width: 188px;
        }
        #Text14
        {
            width: 188px;
        }
        #Text15
        {
            width: 188px;
        }
        #Text16
        {
            width: 188px;
        }
        #Text17
        {
            width: 188px;
        }
        #Text18
        {
            width: 170px;
        }
        #Text19
        {
            width: 111px;
        }
        #Text19
        {
            width: 172px;
        }
        #Text20
        {
            width: 130px;
        }
        #Text20
        {
            width: 111px;
        }
        #Text20
        {
            width: 172px;
        }
        #Text21
        {
            width: 130px;
        }
        #Text21
        {
            width: 111px;
        }
        #Text21
        {
            width: 172px;
        }
        #Text22
        {
            width: 130px;
        }
        #Text22
        {
            width: 111px;
        }
        #Text22
        {
            width: 172px;
        }
        #Text23
        {
            width: 130px;
        }
        #Text23
        {
            width: 111px;
        }
        #Text23
        {
            width: 172px;
        }
        #Text24
        {
            width: 130px;
        }
        #Text24
        {
            width: 111px;
        }
        #Text24
        {
            width: 172px;
        }
        #Text25
        {
            width: 130px;
        }
        #Text25
        {
            width: 111px;
        }
        #Text25
        {
            width: 172px;
        }
        #Text26
        {
            width: 130px;
        }
        #Text26
        {
            width: 111px;
        }
        #Text26
        {
            width: 140px;
        }
        #Text27
        {
            width: 130px;
        }
        #Text27
        {
            width: 111px;
        }
        #Text27
        {
            width: 140px;
        }
        #Text28
        {
            width: 130px;
        }
        #Text28
        {
            width: 111px;
        }
        #Text28
        {
            width: 140px;
        }
        #Text29
        {
            width: 130px;
        }
        #Text29
        {
            width: 111px;
        }
        #Text29
        {
            width: 140px;
        }
        #Text30
        {
            width: 130px;
        }
        #Text30
        {
            width: 111px;
        }
        #Text30
        {
            width: 140px;
        }
        #Text31
        {
            width: 130px;
        }
        #Text31
        {
            width: 111px;
        }
        #Text31
        {
            width: 140px;
        }
        #Text32
        {
            width: 130px;
        }
        #Text32
        {
            width: 111px;
        }
        #Text32
        {
            width: 140px;
        }
        #Text33
        {
            width: 130px;
        }
        #Text33
        {
            width: 111px;
        }
        #Text33
        {
            width: 140px;
        }
        #Text34
        {
            width: 130px;
        }
        #Text34
        {
            width: 111px;
        }
        #Text34
        {
            width: 140px;
        }
        #Text35
        {
            width: 130px;
        }
        #Text35
        {
            width: 111px;
        }
        #Text35
        {
            width: 140px;
        }
        #Text36
        {
            width: 130px;
        }
        #Text36
        {
            width: 111px;
        }
        #Text36
        {
            width: 140px;
        }
        #Text37
        {
            width: 130px;
        }
        #Text37
        {
            width: 111px;
        }
        #Text37
        {
            width: 140px;
        }
        #Text38
        {
            width: 130px;
        }
        #Text38
        {
            width: 111px;
        }
        #Text38
        {
            width: 140px;
        }
        #Text39
        {
            width: 130px;
        }
        #Text39
        {
            width: 111px;
        }
        #Text39
        {
            width: 140px;
        }
        #Text40
        {
            width: 130px;
        }
        #Text40
        {
            width: 111px;
        }
        #Text40
        {
            width: 68px;
        }
        #Text41
        {
            width: 130px;
        }
        #Text41
        {
            width: 111px;
        }
        #Text41
        {
            width: 68px;
        }
        #Text42
        {
            width: 130px;
        }
        #Text42
        {
            width: 111px;
        }
        #Text42
        {
            width: 68px;
        }
        #Text43
        {
            width: 130px;
        }
        #Text43
        {
            width: 111px;
        }
        #Text43
        {
            width: 68px;
        }
        #Text44
        {
            width: 130px;
        }
        #Text44
        {
            width: 111px;
        }
        #Text44
        {
            width: 68px;
        }
        #Text45
        {
            width: 130px;
        }
        #Text45
        {
            width: 111px;
        }
        #Text45
        {
            width: 68px;
        }
        #Text46
        {
            width: 130px;
        }
        #Text46
        {
            width: 111px;
        }
        #Text46
        {
            width: 68px;
        }
        #Text47
        {
            width: 130px;
        }
        #Text47
        {
            width: 111px;
        }
        #Text47
        {
            width: 68px;
        }
        #Text48
        {
            width: 130px;
        }
        #Text48
        {
            width: 111px;
        }
        #Text48
        {
            width: 68px;
        }
        #Text49
        {
            width: 130px;
        }
        #Text49
        {
            width: 111px;
        }
        #Text49
        {
            width: 68px;
        }
        #Text50
        {
            width: 130px;
        }
        #Text50
        {
            width: 111px;
        }
        #Text50
        {
            width: 68px;
        }
        #Text51
        {
            width: 130px;
        }
        #Text51
        {
            width: 111px;
        }
        #Text51
        {
            width: 68px;
        }
        #Text52
        {
            width: 130px;
        }
        #Text52
        {
            width: 111px;
        }
        #Text52
        {
            width: 68px;
        }
        #Text53
        {
            width: 130px;
        }
        #Text53
        {
            width: 111px;
        }
        #Text53
        {
            width: 68px;
        }
        #Text54
        {
            width: 130px;
        }
        #Text54
        {
            width: 111px;
        }
        #Text54
        {
            width: 68px;
        }
        #Text55
        {
            width: 130px;
        }
        #Text55
        {
            width: 111px;
        }
        #Text55
        {
            width: 92px;
        }
        #Text56
        {
            width: 130px;
        }
        #Text56
        {
            width: 111px;
        }
        #Text56
        {
            width: 92px;
        }
        #Text57
        {
            width: 130px;
        }
        #Text57
        {
            width: 111px;
        }
        #Text57
        {
            width: 92px;
        }
        #Text58
        {
            width: 130px;
        }
        #Text58
        {
            width: 111px;
        }
        #Text58
        {
            width: 92px;
        }
        #Text59
        {
            width: 130px;
        }
        #Text59
        {
            width: 111px;
        }
        #Text59
        {
            width: 92px;
        }
        #Text60
        {
            width: 130px;
        }
        #Text60
        {
            width: 111px;
        }
        #Text60
        {
            width: 92px;
        }
        #Text61
        {
            width: 130px;
        }
        #Text61
        {
            width: 111px;
        }
        #Text61
        {
            width: 92px;
        }
        #Text62
        {
            width: 130px;
        }
        #Text62
        {
            width: 111px;
        }
        #Text62
        {
            width: 68px;
        }
        #Text63
        {
            width: 130px;
        }
        #Text63
        {
            width: 111px;
        }
        #Text63
        {
            width: 68px;
        }
        #Text64
        {
            width: 130px;
        }
        #Text64
        {
            width: 111px;
        }
        #Text64
        {
            width: 68px;
        }
        #Text65
        {
            width: 130px;
        }
        #Text65
        {
            width: 111px;
        }
        #Text65
        {
            width: 68px;
        }
        #Text66
        {
            width: 130px;
        }
        #Text66
        {
            width: 111px;
        }
        #Text66
        {
            width: 68px;
        }
        #Text67
        {
            width: 130px;
        }
        #Text67
        {
            width: 111px;
        }
        #Text67
        {
            width: 68px;
        }
        #Text68
        {
            width: 130px;
        }
        #Text68
        {
            width: 111px;
        }
        #Text68
        {
            width: 168px;
        }
        .style1
        {
            height: 29px;
        }
        #Text68
        {
            width: 130px;
        }
        #Text68
        {
            width: 111px;
        }
        #Text68
        {
            width: 68px;
        }
        #DESCRIPTION
        {
            width: 522px;
        }
        #Address
        {
            height: 64px;
            width: 512px;
        }
        #Text69
        {
            width: 130px;
        }
        #Text69
        {
            width: 111px;
        }
        #Text69
        {
            width: 140px;
        }
        #Text70
        {
            width: 130px;
        }
        #Text70
        {
            width: 111px;
        }
        #Text70
        {
            width: 140px;
        }
        #Text71
        {
            width: 130px;
        }
        #Text71
        {
            width: 111px;
        }
        #Text71
        {
            width: 140px;
        }
        #Text72
        {
            width: 130px;
        }
        #Text72
        {
            width: 111px;
        }
        #Text72
        {
            width: 140px;
        }
        #Text69
        {
            width: 130px;
        }
        #Text69
        {
            width: 111px;
        }
        #Text69
        {
            width: 172px;
        }
        #Text69
        {
            width: 52px;
        }
        .style2
        {
            width: 92px;
        }
        #Amount
        {
            width: 144px;
        }
        #Amount0
        {
            width: 144px;
        }
        #Amount1
        {
            width: 144px;
        }
        #Amount2
        {
            width: 144px;
        }
        #Amount3
        {
            width: 144px;
        }
        #Amount4
        {
            width: 144px;
        }
        #Amount5
        {
            width: 144px;
        }
        #Partial
        {
            width: 136px;
        }
        #Partial0
        {
            width: 135px;
        }
        #Partial1
        {
            width: 135px;
        }
        #Partial2
        {
            width: 135px;
        }
        #Partial3
        {
            width: 136px;
        }
        #Partial4
        {
            width: 135px;
        }
        #Partial5
        {
            width: 135px;
        }
        #Partial6
        {
            width: 68px;
        }
        #Signature
        {
            width: 294px;
        }
        #Date
        {
            width: 292px;
        }
        .style3
        {
            background-color: #999999;
        }
        .style4
        {
            text-align: left;
        }
        #Rank1
        {
            width: 192px;
        }
        #Signature1
        {
            width: 191px;
        }
        #Date0
        {
            width: 189px;
        }
        #Rank2
        {
            width: 169px;
        }
        #Signature2
        {
            width: 169px;
        }
        #Date1
        {
            width: 169px;
        }
        .style5
        {
            text-align: left;
            background-color: #999999;
        }
        .style6
        {
            height: 41px;
        }
        .style7
        {
            font-size: xx-large;
            text-align: center;
        }
        .style8
        {
            text-align: center;
            background-color: #CCCCCC;
        }
        </style>
</head>

<body>
<form action="sp.php" method="post">
<table cellspacing="0" cellpadding="0">
  <col width="16" span="67" />
  <tr>
    <td width="16" align="left" valign="top"><img src="../../AppData/Roaming/Adobe/Dreamweaver CS6/en_US/OfficeImageTemp/clip_image002_0035.png" alt="fau" width="79" height="88" />
      <table cellpadding="0" cellspacing="0">
        <tr>
          <td width="16"><a name="RANGE!A1:BO53" id="RANGE!A1:BO53">&nbsp;</a></td>
        </tr>
      </table></td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td class="style2">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
    <td width="16">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="14" rowspan="2" class="style7"><strong><span class="style8"><u>SUNDRY PAYMENT ADVICE</u></span></strong></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="style2"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="style2"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="left">DEPARTMENT NAME:</td>
    <td colspan="36">
        <input id="DEPARTMENT NAME" name="department" type="text" style="width: 527px" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td align="left"> </td>
    <td align="left"> </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="style2"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="left">DESCRIPTION</td>
    <td colspan="40">
        <input maxlength="32" id="DESCRIPTION" name="DESCRIPTION" type="text" />(only 32    characters) </td>
    <td colspan="6" align="left">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="left">PAY / PAID TO (PAYEE DETAILS)</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="style2"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">INITIALS</td>
    <td></td>
    <td colspan="8">
        <input id="INITIALS" name="INITIALS" type="text" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="style2"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">SURNAME    / SUPPLIER</td>
    
    <td colspan="34">
        <input id="SURNAME / SUPPLIER" name="supplier" type="text" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="7">&nbsp;</td>
    <td colspan="12">
        &nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="left">ADDRESS</td>
    <td colspan="34" rowspan="4">
        <textarea id="Address" name="ADDRESS"></textarea></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="7">&nbsp;</td>
    <td colspan="12">
        &nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="7">&nbsp;</td>
    <td colspan="10">
        &nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="7">&nbsp;</td>
    <td colspan="12">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="7">&nbsp;</td>
    <td colspan="12">
        &nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">POSTAL    CODE</td>
    
    <td> 
        <input maxlength="5" id="Postal code" type="text" name="code" style="width: 97px" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="style2"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="7">&nbsp;</td>
    <td colspan="10">
        &nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="style2"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="7">&nbsp;</td>
    <td colspan="12">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" align="center" style="background-color: #999999">SOURCE DOC. TYPE</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
     <td></td> 
    <td colspan="8" align="center" style="background-color: #999999">PAYMENT    METHOD</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="7">&nbsp;</td>
    <td colspan="12">
        &nbsp;</td>
  </tr>
  <tr>
   
    <td colspan="3">
        <input id="Invoice" name="R1" type="radio" value="Invoice" />&nbsp; Invoice</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td colspan="5" align="left">Payment Date:</td>
    <td colspan="1">  <input id="Payment Date:" name="payment_date" type="date"  /></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td>
        <input id="System Cheque" name="R2" type="radio" value="System Cheque" /></td>
    <td colspan="5">System Cheque</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="7">&nbsp;</td>
    <td colspan="10">
        &nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    
    <td colspan="3" align="left">
        <input id="Radio1" name="R1" type="radio" value="Sundry" /> Sundry</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td colspan="5" align="left">Discount Date:</td>
    <td colspan="1">
        <input id="Discount Date" name="discount_date" type="date" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
        <input id="Manual Cheque" name="R2" type="radio" value="Manual Cheque" /></td>
    <td colspan="5" align="left">Manual Cheque</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="7">&nbsp;</td>
    <td colspan="12">&nbsp;</td>
  </tr>
  <tr>
   
    <td colspan="2" align="left">
        <input id="Radio2" name="R1" type="radio" value="GRV" />&nbsp; GRV</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td colspan="5" align="left">Discount    Amount:</td>
    <td colspan="1">
        <input id="Discount Amount" name="discount_amount" type="text" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
        <input id="EBT" name="R2" type="radio" value="EBT" /></td>
    <td colspan="2" align="left">EBT</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    
    <td colspan="4" align="left">
        <input id="Radio3" name="R1" type="radio" value="Credit note" /> Credit Note</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td colspan="4" align="left">Discount %:</td>
    <td></td>
    <td colspan="1">
        <input id="Discount %" name="discount_percent" type="text" /></td>
    <td></td>
    <td></td>
    <td></td>
    
    <td></td>
    <td>
        <input id="Departmental Transfer" name="R2" type="radio" value="Departmental Transfer" /></td>
    <td colspan="7" align="left">Departmental    Transfer</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    
    <td  colspan="6" class="style3">CHEQUE DETAILS</td>
    
    <td></td>
    <td></td>
    <td colspan="15" align="center" style="background-color: #999999">BANK DETAILS</td>
    
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="5" align="left">Bank Acc. No</td>
    <td colspan="15">
        <input id="Bank Acc NO" name="acc_no" type="text" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left">Cheque No.</td>
    <td colspan="4">
        <input id="Cheque No" name="cheque_no" type="text" style="width: 190px" /></td>
    <td colspan="2">&nbsp;</td>
    <td colspan="5" align="left">Branch Code</td>
    
    
    <td colspan="8">
        <input id="branch code" name ="branch_code" type="text" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="5" align="left">Bank Acc Type</td>
    <td colspan="10">
        <input id="bank acc type" name="acc_type" type="text" 
            style="width: 233px; height: 24px;" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left">Cheque Date</td>
    <td colspan="2">
        <input id="cheque DATE0" name="cheque_date" type="date" style="width: 187px" /></td>
    <td>&nbsp;</td>
    <td colspan="3" ></td>
    <td colspan="15" align="left">ie: Current,    Savings, Transmission etc.</td>
    
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="6" align="left">&nbsp;</td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="style2"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td colspan="5" align="left" class="style1">DB Date : </td>
    <td colspan="8" class="style1">
        <input id="DB DATE" name="db_date" type="date" /></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td colspan="6" align="left" class="style1">&nbsp;</td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
    <td class="style1"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="style2"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" class="style5">Item Line No</td>
    
    <td colspan="2" class="style5">Source    Document Date</td>
    
    <td colspan="3" class="style5">Source Document No</td>
    
    <td colspan="2" class="style5">Source    Document Type</td>
    
    <td colspan="3" class="style5">Amount</td>
    <td class="style5">&nbsp;</td>
    <td colspan="2" style="background-color: #999999" >Partial</td>
    <td class="style5">&nbsp;</td>
    <td colspan="3" class="style5">Line Final</td>
    <td colspan="5" class="style5">Projection    Final</td>
    <td class="style4">&nbsp;</td>
    <td class="style4">&nbsp;</td>
    <td class="style4">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" >
        <input id="Item Line No" type="text"  name="a1" style="width: 185px" /></td>
    <td colspan="2">
        <input id="Source Document Date"  name="a2" type="text" 
            style="width: 210px" /></td>
    <td colspan="3" >
        <input id="Source Document No" name="a3" type="text" 
            style="width: 156px" /></td>
    <td colspan="2" >
        <input id="Source Document Type" name="a4" type="text" 
            style="width: 151px" /></td>
    <td colspan="4" >
        <input id="Amount"  name="a5" type="text" /></td>
    <td colspan="2" >
        <input id="Partial" name="a6" type="text" /></td>
    <td colspan="3">
        <input id="Line Final" name="a7" type="text" style="width: 68px" /></td>
    <td colspan="8">
        <input id="Projection Final" name="a8" type="text" style="width: 68px" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
 <tr>
    <td colspan="2" >
        <input id="Item Line No" type="text"  name="b1" style="width: 185px" /></td>
    <td colspan="2">
        <input id="Source Document Date"  name="b2" type="text" 
            style="width: 210px" /></td>
    <td colspan="3" >
        <input id="Source Document No" name="b3" type="text" 
            style="width: 156px" /></td>
    <td colspan="2" >
        <input id="Source Document Type" name="b4" type="text" 
            style="width: 151px" /></td>
    <td colspan="4" >
        <input id="Amount"  name="b5" type="text" /></td>
    <td colspan="2" >
        <input id="Partial" name="b6" type="text" /></td>
    <td colspan="3">
        <input id="Line Final" name="b7" type="text" style="width: 68px" /></td>
    <td colspan="8">
        <input id="Projection Final" name="b8" type="text" style="width: 68px" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" >
        <input id="Item Line No" type="text"  name="c1" style="width: 185px" /></td>
    <td colspan="2">
        <input id="Source Document Date"  name="c2" type="text" 
            style="width: 210px" /></td>
    <td colspan="3" >
        <input id="Source Document No" name="c3" type="text" 
            style="width: 156px" /></td>
    <td colspan="2" >
        <input id="Source Document Type" name="c4" type="text" 
            style="width: 151px" /></td>
    <td colspan="4" >
        <input id="Amount"  name="c5" type="text" /></td>
    <td colspan="2" >
        <input id="Partial" name="c6" type="text" /></td>
    <td colspan="3">
        <input id="Line Final" name="c7" type="text" style="width: 68px" /></td>
    <td colspan="8">
        <input id="Projection Final" name="c8" type="text" style="width: 68px" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
     <tr>
    <td colspan="2" >
        <input id="Item Line No" type="text"  name="d1" style="width: 185px" /></td>
    <td colspan="2">
        <input id="Source Document Date"  name="d2" type="text" 
            style="width: 210px" /></td>
    <td colspan="3" >
        <input id="Source Document No" name="d3" type="text" 
            style="width: 156px" /></td>
    <td colspan="2" >
        <input id="Source Document Type" name="d4" type="text" 
            style="width: 151px" /></td>
    <td colspan="4" >
        <input id="Amount"  name="d5" type="text" /></td>
    <td colspan="2" >
        <input id="Partial" name="d6" type="text" /></td>
    <td colspan="3">
        <input id="Line Final" name="d7" type="text" style="width: 68px" /></td>
    <td colspan="8">
        <input id="Projection Final" name="d8" type="text" style="width: 68px" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td colspan="2" >
        <input id="Item Line No" type="text"  name="e1" style="width: 185px" /></td>
    <td colspan="2">
        <input id="Source Document Date"  name="e2" type="text" 
            style="width: 210px" /></td>
    <td colspan="3" >
        <input id="Source Document No" name="e3" type="text" 
            style="width: 156px" /></td>
    <td colspan="2" >
        <input id="Source Document Type" name="e4" type="text" 
            style="width: 151px" /></td>
    <td colspan="4" >
        <input id="Amount"  name="e5" type="text" /></td>
    <td colspan="2" >
        <input id="Partial" name="e6" type="text" /></td>
    <td colspan="3">
        <input id="Line Final" name="e7" type="text" style="width: 68px" /></td>
    <td colspan="8">
        <input id="Projection Final" name="e8" type="text" style="width: 68px" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td colspan="2" >
        <input id="Item Line No" type="text"  name="f1" style="width: 185px" /></td>
    <td colspan="2">
        <input id="Source Document Date"  name="f2" type="text" 
            style="width: 210px" /></td>
    <td colspan="3" >
        <input id="Source Document No" name="f3" type="text" 
            style="width: 156px" /></td>
    <td colspan="2" >
        <input id="Source Document Type" name="f4" type="text" 
            style="width: 151px" /></td>
    <td colspan="4" >
        <input id="Amount"  name="f5" type="text" /></td>
    <td colspan="2" >
        <input id="Partial" name="f6" type="text" /></td>
    <td colspan="3">
        <input id="Line Final" name="f7" type="text" style="width: 68px" /></td>
    <td colspan="8">
        <input id="Projection Final" name="f8" type="text" style="width: 68px" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
     <tr>
    <td colspan="2" >
        <input id="Item Line No" type="text"  name="g1" style="width: 185px" /></td>
    <td colspan="2">
        <input id="Source Document Date"  name="g2" type="text" 
            style="width: 210px" /></td>
    <td colspan="3" >
        <input id="Source Document No" name="g3" type="text" 
            style="width: 156px" /></td>
    <td colspan="2" >
        <input id="Source Document Type" name="g4" type="text" 
            style="width: 151px" /></td>
    <td colspan="4" >
        <input id="Amount"  name="g5" type="text" /></td>
    <td colspan="2" >
        <input id="Partial" name="g6" type="text" /></td>
    <td colspan="3">
        <input id="Line Final" name="g7" type="text" style="width: 68px" /></td>
    <td colspan="8">
        <input id="Projection Final" name="g8" type="text" style="width: 68px" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td ></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    
    
    
    <td colspan="2" >Total Payment    Amount</td>
    <td colspan="6" >
        <input id="Total Payment Amount" name="total" style="width: 144px" 
            type="text" /> </td>
    <td ></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
    <td class="style6"></td>
  </tr>
  <tr>
    <td colspan="5" class="style3">Compiled By</td>
    <td colspan="5" class="style3">Checked and Verified By </td>
    <td colspan="5" class="style3">Expenditure Authorised by </td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">
        <input id="compiled_by"name="compiled_by" type="text" 
            style="width: 290px; height: 22px" /></td>
    <td colspan="5">
        <input id="Checked and Verified By" name="checked_by" type="text" 
            style="width: 194px" /></td>
    <td colspan="5">
        <input id="authorised_by" name="authorised_by" 
            type="text" style="width: 169px" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">Rank</td>
    <td colspan="5">Rank</td>
    <td colspan="5">Rank</td>
    <td></td>
    <td colspan="12" rowspan="8" width="192">BEFORE    COMMITTING EXPENDITURE,<br />
      OFFICIALS MUST ENSURE THAT THEY<br />
      ADHERE TO SECTION 45 OF THE PFMA.<br /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">
        <input id="Rank" name="rank" type="text" /></td>
    <td colspan="5">
        <input id="Rank1" name="rank1" type="text" /></td>
    <td colspan="5">
        <input id="Rank2" name="rank2" type="text" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td class="style2"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">Signature</td>
    <td colspan="5">Signature</td>
    <td colspan="5">Signature</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">
        <input id="Signature"name="signature" type="text" /></td>
    <td colspan="5">
        <input id="Signature1" name="signature1" type="text" /></td>
    <td colspan="5">
        <input id="Signature2" name="signature2" type="text" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="style2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" align="left">Date</td>
    <td colspan="5" align="left">Date</td>
    <td colspan="5" align="left">Date</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">
        <input id="Date" name="date1" type="date" /></td>
    <td colspan="5">
        <input id="Date0" name="date2" type="date" /></td>
    <td colspan="5">
        <input id="Date1" name="date3" type="date" /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="10">&nbsp;</td>
    <td colspan="10">&nbsp;</td>
    <td colspan="10">&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="30" rowspan="2" width="480">NB: COMPLETE THE ALLOCATION ATTACHMENT FOR EACH ITEM LINE    CAPTURED<br /></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td class="style2">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>

<html xmlns="http://www.w3.org/1999/xhtml"><script language="javascript" type="text/javascript">                                                                 </script></html>
<html xmlns="http://www.w3.org/1999/xhtml"><script language="javascript" type="text/javascript">                                                                 </script></html>
<html xmlns="http://www.w3.org/1999/xhtml"><script language="javascript" type="text/javascript">                                                                 </script></html>
<html xmlns="http://www.w3.org/1999/xhtml"><script language="javascript" type="text/javascript">                                                                 </script></html>