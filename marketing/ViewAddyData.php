<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Addy Data</title>

</head>

<Body link="#990000" vlink="#990000" alink="#C0C0C0">

<div align="center">

<table border="1" style="border-width: 0px">
 
<tr  width="100%" bgcolor=#F4F4F4> 
<th align="center" style="letter-spacing: 4pt; align:center">
<p style="margin-top: 0; margin-bottom: 0">
<font face="Elephant" size="5" color="#800000">ADDRESSES</font></p>

<?php
mysql_connect("mysql2.nextmill.net", "rk", "Sevens@7") or die(mysql_error());
mysql_select_db("mdhealthclinics_mdhealthclinics") or die(mysql_error());

$sql="SELECT * FROM addys";
$result = mysql_query($sql);

$count=mysql_num_rows($result);
?>

<p style="margin-top: 0; margin-bottom: 0">Record Count =  <? echo $count ?></p>



</th> 
</tr>
 
 <tr>
<th bgcolor="#FFFFFF" style="border-right-style: solid; border-right-width: 1px; border-top-style: solid; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px" height="1"><font color="#333333">

<a href="http://www.mdhealthclinics.com/marketing/StaffSwitchboard.php" target="_self">
<font color="#800000" size="4">Return To Switchboard</font></a></font>
</th>
</tr>

</tr>
<tr>
<td style="border-style: none; border-width: medium"> 
<?php

// Make a MySQL Connection

mysql_connect("mysql2.nextmill.net", "rk", "Sevens@7") or die(mysql_error());
mysql_select_db("mdhealthclinics_mdhealthclinics") or die(mysql_error());


// Get the name of the column to sort
$order = "City";
$orderBy = "City";
if ($_GET['orderBy']) {
$order = $_GET['orderBy'];
}

// Get the value of either ascending or descending
$sort = "DESC";
$sortBy = "DESC";
if ($_GET['sortBy'] == "DESC") {
$sort = "ASC";
$sortBy = "ASC";
}
if ($_GET['sortBy'] == "ASC") {
$sort = "DESC";
$sortBy = "DESC";
}

$sql="SELECT * FROM addys ORDER BY $order $sort";
$result = mysql_query($sql);

$count=mysql_num_rows($result);

$row = mysql_fetch_array( $result );

echo "<table border='1' align=center>";
echo "<tr align=center bgcolor=#F4F4F4>

<th width=10 align=center><a href='?orderBy=ID&sortBy=$sortBy'><font size=1>ID</font></a></th> 
<th width=75 align=center><a href='?orderBy=LName&sortBy=$sortBy'><font size=1>LName</font></a></th>
<th width=15 align=center><a href='?orderBy=Specialty&sortBy=$sortBy'><font size=1>Sp</font></a></th>
<th width=250 align=center><a href='?orderBy=PracticeType&sortBy=$sortBy'><font size=1>Comments</font></a></th>
<th width=165 align=center><a href='?orderBy=Address&sortBy=$sortBy'><font size=1>Address</font></a></th>
<th width=110 align=center><a href='?orderBy=City&sortBy=$sortBy'><font size=1>City</font></a></th>
<th width=10 align=center><a href='?orderBy=Zip&sortBy=$sortBy'><font size=1>Zip</font></a></th>
<th width=15 align=center><a href='?orderBy=DateSeen&sortBy=$sortBy'><font size=1>DateSeen</font></a></th>
<th width=15 align=center><a href='?orderBy=Followup&sortBy=$sortBy'><font size=1>ReSchedule1</font></a></th>
<th width=15 align=center><a href='?orderBy=DateMailed&sortBy=$sortBy'><font size=1>ReSchedule2</font></a></th>
<th width=3 align=center><a href='?orderBy=Priority&sortBy=$sortBy'><font size=1>Priority</font></a></th>
</tr>";

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr height=30 valign=middle align=center><td width=10 align=center><font size=1 face=Times New Roman><a href= 'AddysInfo.php?ID=".$row[ID]."'>"; 
	echo $row['ID'];
	echo "</a></td><td width=75 align=left><font size=1 face=Times New Roman>&nbsp;";
	echo $row['LName'];
	echo "&nbsp;</td><td width=15 align=left><font size=1 face=Times New Roman>&nbsp;"; 
	echo $row['Specialty'];
	echo "&nbsp;</td><td width=100 align=left><font size=1 face=Times New Roman>&nbsp;"; 
	echo $row['PracticeType'];
	echo "&nbsp;</td><td width=165 align=left><font size=1 face=Times New Roman>&nbsp;"; 
	echo $row['Address'];
	echo "&nbsp;</td><td width=110 align=left><font size=1 face=Times New Roman>"; 
	echo $row['City'];
	echo "&nbsp;</td><td width=10 align=left><font size=1 face=Times New Roman>&nbsp;"; 
	echo $row['Zip'];
	echo "&nbsp;</td><td width=15 align=center><font size=1 face=Times New Roman>&nbsp;"; 
	echo $row['DateSeen'];
	echo "&nbsp;</td><td width=15 align=center><font size=1 face=Times New Roman>&nbsp;"; 
	echo $row['Followup'];
	echo "&nbsp;</td><td width=15 align=center><font size=1 face=Times New Roman>&nbsp;"; 
	echo $row['DateMailed'];
	echo "&nbsp;</td><td width=3 align=center><font size=1 face=Times New Roman>&nbsp;"; 
	echo $row['Priority'];
	echo "&nbsp;</td>
	</tr>"; 
}

echo "</table>";



?>
</td>
</tr>
</table>
</div>
</body>

</html>