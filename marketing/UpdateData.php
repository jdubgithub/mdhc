<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Update Data</title>

<?php
$ID = $_POST['ID'];
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
 
$query="UPDATE addys SET ID='$ID', FName='$FName', LName='$LName', Title='$Title', Company='$Company', Specialty='$Specialty', PracticeType='$PracticeType', Address='$Address', City='$City', Zip='$Zip', Zip4='$Zip4', Phone='$Phone', Email='$Email', DateSeen='$DateSeen', Followup='$Followup', DateMailed='$DateMailed', Response='$Response', Priority='$Priority' WHERE ID='$ID'";

mysql_query($query);

//echo $SID;
//echo $PlTitle;
//echo $SunDist;
//echo $PlacementName;

?>
</head>

<body>

	<table border="1" width="1148" style="border-left-width: 0px; border-right-width: 0px; border-bottom-width: 0px">
<tr  width="100%" bgcolor=#F4F4F4> 
<th align="center" style="letter-spacing: 4pt; align:center">
<font face="Elephant" size="5" color="#800000">UPDATED ADDYS INFO</font></th> 
</tr>

<tr>
<th bgcolor="#FFFFFF" style="border-right-style: solid; border-right-width: 1px; border-top-style: solid; border-top-width: 1px; ">
<font color="#333333">
</font></th>
</tr>

<tr>
<th bgcolor="#FFFFFF" style="border-right-style: none; border-right-width: medium; border-top-style: solid; border-top-width: 1px; border-bottom-style: none; border-bottom-width: medium; border-left-style:none; border-left-width:medium">

&nbsp;</th>
</tr>

<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; ">

<font color="#000000" size="4">You </font>

<font color="#800000" size="4">UPDATED</font>
<font color="#000000" size="4"> <? echo $FName ?> <? echo $LName ?> Addys Info
</font>

<font color="#800000" size="4">SUCCESSFULLY. </font>

</th>
</tr>

 <tr>
<th align="center" bgcolor="#FFFFFF" style="border-right-style: solid; border-right-width: 1px; border-top-style: solid; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px" height="1"><font color="#333333">

<a href="http://www.mdhealthclinics.com/marketing/ViewAddyData.php" target="_self">
<font color="#800000" size="4">Return To Addresses</font></a></font>
</th>
</tr>

</table>

</body>

</html>
