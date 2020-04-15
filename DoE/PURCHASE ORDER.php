<?php

$department			= $_POST ['department'];
$order_no			= $_POST ['order_no'];
$office				= $_POST['office'];
$order_date			= $_POST ['order_date'];
$order_description	= $_POST ['order_description'];
$supplier_name		= $_POST ['supplier_name'];
$contract_no	 	= $_POST ['contract_no'];
$contract_type		= $_POST ['contract_type'];
$reference			= $_POST ['reference'];
$captured_by		= $_POST ['captured_by'];
$authorised_by		= $_POST ['authorised_by'];
$over_authorised_by	= $_POST ['over_authorised_by'];
$date_captured		= $_POST ['date_captured'];
$date_authorised	= $_POST ['date_authorised'];
$date_over_authorised= $_POST ['date_over_authorised'];
$a1			= $_POST ['a1'];
$b1			= $_POST ['b1'];
$c1			= $_POST ['c1'];
$d1			= $_POST ['d1'];
$e1			= $_POST ['e1'];
$f1			= $_POST ['f1'];
$g1			= $_POST ['g1'];
$h1			= $_POST ['h1'];
$i1			= $_POST ['i1'];
$a2			= $_POST ['a2'];
$b2			= $_POST ['b2'];
$c2			= $_POST ['c2'];
$d2			= $_POST ['d2'];
$e2			= $_POST ['e2'];
$f2			= $_POST ['f2'];
$g2			= $_POST ['g2'];
$h2			= $_POST ['h2'];
$i2			= $_POST ['i2'];
$a3			= $_POST ['a3'];
$b3			= $_POST ['b3'];
$c3			= $_POST ['c3'];
$d3			= $_POST ['d3'];
$e3			= $_POST ['e3'];
$f3			= $_POST ['f3'];
$g3			= $_POST ['g3'];
$h3			= $_POST ['h3'];
$i3			= $_POST ['i3'];
$a4			= $_POST ['a4'];
$b4			= $_POST ['b4'];
$c4			= $_POST ['c4'];
$d4			= $_POST ['d4'];
$e4			= $_POST ['e4'];
$f4			= $_POST ['f4'];
$g4			= $_POST ['g4'];
$h4			= $_POST ['h4'];
$i4			= $_POST ['i4'];
$a5			= $_POST ['a5'];
$b5			= $_POST ['b5'];
$c5			= $_POST ['c5'];
$d5			= $_POST ['d5'];
$e5			= $_POST ['e5'];
$f5			= $_POST ['f5'];
$g5			= $_POST ['g5'];
$h5			= $_POST ['h5'];
$i5			= $_POST ['i5'];


if(isset($_POST['submit'])) {
	mysql_connect ("localhost", "root", "") or die ("connection failed");
	mysql_select_db("testdb");
	$query="INSERT INTO cancelreissue(department,
										order_no,
										office,
										order_date,
										order_description,
										supplier_name,
										contract_no,
										contract_type,
										reference,
										captured_by,
										authorised_by,
										over_authorised_by,
										date_captured,
										date_authorised,
										date_over_authorised,
										a1,			
										b1,	
										c1,		
										d1,			
										e1,		
										f1,	
										g1,
										h1,		
										i1,	
										a2,			
										b2,		
										c2,		
										d2,		
										e2,
										f2,
										g2,
										h2,
										i2,
										a3,	
										b3,	
										c3,
										d3,
										e3,	
										f3,		
										g3,		
										h3,			
										i3,			
										a4,	
										b4,		
										d4,		
										e4,	
										f4,		
										g4,	
										h4,
										i4,		
										a5,		
										b5,
										c5,		
										d5,		
										e5,			
										f5,	
										g5,
										h5,	
										i5)
								VALUES
									('$department',
									'$order_no',
									'$office',
									'$order_date',
									'$order_description',	
									'$supplier_name',	
									'$contract_no',	 		
									'$contract_type',		
									'$reference',				
									'$captured_by',		
									'$authorised_by',		
									'$over_authorised_by',	
									'$date_captured',
									'$date_authorised',	
									'$date_over_authorised',
									'$a1',			
									'$b1',	
									'$c1',		
									'$d1',			
									'$e1',		
									'$f1',	
									'$g1',
									'$h1',		
									'$i1',	
									'$a2',			
									'$b2',		
									'$c2',		
									'$d2',		
									'$e2',
									'$f2',
									'$g2',
									'$h2',
									'$i2',
									'$a3',	
									'$b3',	
									'$c3',
									'$d3',
									'$e3',	
									'$f3',		
									'$g3',		
									'$h3',			
									'$i3',			
									'$a4',	
									'$b4',		
									'$d4',		
									'$e4',	
									'$f4',		
									'$g4',	
									'$h4',
									'$i4',		
									'$a5',		
									'$b5',
									'$c5',		
									'$d5',		
									'$e5',			
									'$f5',	
									'$g5',
									'$h5',	
									'$i5')";
									
if(mysql_query($query))
	{
	echo "successfully submitted";
	}
else {
	echo "something is wrong";
}
}


?>