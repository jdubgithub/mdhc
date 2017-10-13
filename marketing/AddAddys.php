<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Add Address</title>

<?php

$FName = $_POST['FName'];
$LName = $_POST['LName'];
$Title = $_POST['Title'];
$Company = $_POST['Company'];
$Specialty = $_POST['Specialty'];
$PracticeType = $_POST['PracticeType'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$Zip = $_POST['Zip'];
$Zip4 = $_POST['Zip4'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$DateSeen = $_POST['DateSeen'];
$Followup = $_POST['Followup'];
$DateMailed = $_POST['DateMailed'];
$Response = $_POST['Response'];
$Priority = $_POST['Priority'];

// Make a MySQL Connection
mysql_connect("mysql2.nextmill.net", "rk", "Sevens@7") or die(mysql_error());
mysql_select_db("mdhealthclinics_mdhealthclinics") or die(mysql_error());

mysql_query("INSERT INTO `mdhealthclinics_mdhealthclinics`.`tab` (FName, LName, Title, Company, Specialty, PracticeType, Address, City, Zip, Zip4, Phone, Email, DateSeen, Followup, DateMailed, Response, Priority) VALUES ('$FName', '$LName', '$Title', '$Company', '$Specialty', '$PracticeType', '$Address', '$City', '$Zip', '$Zip4', '$Phone', '$Email', '$DateSeen', '$Followup', '$DateMailed', '$Response', '$Priority')") or die(mysql_error());

?>

</head>

<body>
	<div align="center">
		<table border="1" width="1148">
<tr  width="100%" bgcolor=#F4F4F4> 
<th colspan="6" align="center" style="letter-spacing: 4pt; align:center">
<p style="margin-top: 0; margin-bottom: 0">
<font face="Elephant" size="5" color="#800000">ADDED ADDRESS</font></th> 
</tr>
<tr>
<th colspan="6" bgcolor="#FFFFFF" style="border-right-style: solid; border-right-width: 1px; border-top-style: solid; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px">
<font color="#333333">

</font></th>
</tr>
</table></div>
<p align="center" style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
<p align="center" style="margin-top: 0; margin-bottom: 0">You
<font color="#800000"><b>ADDED</b></font> <? echo $Title ?> <? echo $FName ?> <? echo $LName ?> to the Addy Data<b><font color="#800000"> SUCCESSFULLY</font></b>. </p>
<p align="center" style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
<p align="center" style="margin-top: 0; margin-bottom: 0">To check your addition 
go to the Addy Data Page and find your added address.<br>
&nbsp;</p>

<p align="center">

<tr align="center" width="100%" bgcolor=#F4F4F4> 
<th style="letter-spacing: 4pt; align:center" height="31">
<font color="#333333">
<a href="http://www.mdhealthclinics.com/marketing/ViewAddyData.php" target="_self">
<font color="#800000" size="4">Return To Addresses</font></a></font>
</th> 
</tr>

</p>

</body>

</html>