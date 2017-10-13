<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>TAB Message Board</title>

</head>

<Body link="#990000" vlink="#990000" alink="#C0C0C0">

<div align="center">

<table border="1" width="659" style="border-width: 0px">
 
<tr  width="100%" bgcolor=#F4F4F4> 
<th align="center" style="letter-spacing: 4pt; align:center">
<p style="margin-top: 0; margin-bottom: 0">
<font face="Elephant" size="5" color="#800000">TAB Message Board</font></p>

</th> 
</tr>
 
</tr>
<tr>
<td style="border-style: none; border-width: medium"> 
<?php

// Make a MySQL Connection

$con = mysql_connect("mysql2.nextmill.net", "rk", "Sevens@7") or die(mysql_error());
mysql_select_db("mdhealthclinics_mdhealthclinics") or die(mysql_error());

// Get the name of the column to sort
$order = "ID";
$orderBy = "ID";
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

$sql="SELECT * FROM tab ORDER BY $order $sort";
$result = mysql_query($sql);

echo "<table border='1' style='padding:0;' align=center width=1400>";
echo "<tr align=center bgcolor=#F4F4F4 width=1400>
<th width=10 align=center><a href='?orderBy=ID&sortBy=$sortBy'><font size=1>ID</font></a></th> 
<th width=52 align=center><a href='?orderBy=MsgDate&sortBy=$sortBy'><font size=1>MsgDate</font></a></th>
<th width=52 align=center><a href='#'><font size=1>MsgTime</font></a></th>
<th align=center><a href='?orderBy=CallerName&sortBy=$sortBy'><font size=1>CallerName</font></a></th>
<th align=center><a href='?orderBy=CurrentPt&sortBy=$sortBy'><font size=1>Pt</font></a></th>
<th width=100 align=center><a href='?orderBy=InsCarrier&sortBy=$sortBy'><font size=1>InsCarrier</font></a></th>
<th width=55 align=center><a href='#'><font size=1>PolicyNum</font></a></th>
<th width=50 align=center><a href='?orderBy=DOB&sortBy=$sortBy'><font size=1>DOB</font></a></th>
<th width=55 align=center><a href='?#'><font size=1>TelNum</font></a></th>
<th width=10 align=center><a href='?orderBy=BTRC&sortBy=$sortBy'><font size=1>BTRC</font></a></th>
<th width=200 align=center><a href='#'><font size=1>Message</font></a></th>
<th align=center><a href='?orderBy=Called&sortBy=$sortBy'><font size=1>Called</font></a></th>
<th align=center><a href='?orderBy=LM&sortBy=$sortBy'><font size=1>LM</font></a></th>
<th align=center><a href='#'><font size=1>Result</font></a></th>
<th align=center><font size=1>&nbsp;</font></th>
</tr>";

// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
	// Print out the contents of each row into a table
	echo "<form method='POST' action='MsgAdmin.php'>";
	echo "<tr height=30 valign=middle align=center><td valign=middle width=10 align=center><p align='center'><input type='text' name='ID' size='1' style='font-size: 6pt; text-align:center' value='".$row[ID]."' readonly></p>&nbsp;";
	echo "</td><td valign=top width=52 align=center><font size=1 face=Times New Roman>&nbsp;";
	echo $row['MsgDate'];
	echo "&nbsp;</td><td valign=top width=52 align=center><font size=1 face=Times New Roman>&nbsp;"; 
	echo $row['MsgTime'];
	echo "&nbsp;</td><td valign=top width=52 align=center><p valign=middle align='center'><input type='text' name='CallerName' value='".$row['CallerName']."' size='25' style='font-size: 7pt; text-align:center; font-family:Times New Roman' readonly></p>&nbsp;";
	echo "&nbsp;</td><td valign=top width=10 align=center><font size=1 face=Times New Roman>&nbsp;"; 
	echo $row['CurrentPt'];
	echo "&nbsp;</td><td valign=top width=100 align=center><font size=1 face=Times New Roman>&nbsp;"; 
	echo $row['InsCarrier'];
	echo "&nbsp;</td><td valign=top width=55 align=center><font size=1 face=Times New Roman>&nbsp;"; 
	echo $row['PolicyNum'];
	echo "&nbsp;</td><td valign=top width=50 align=center><font size=1 face=Times New Roman>&nbsp;"; 
	echo $row['DOB'];
	echo "&nbsp;</td><td valign=top width=55 align=center><p align='center'><input type='text' name='TelNum' value='".$row['TelNum']."' size='15' style='font-size:7pt; text-align:center; font-family:Times New Roman' readonly></p>&nbsp;";
	echo "&nbsp;</td><td valign=top width=10 align=center><font size=1 face=Times New Roman>&nbsp;"; 
	echo $row['BTRC'];
	echo "&nbsp;</td><td valign=top width=200 align=left><font size=1 face=Times New Roman>&nbsp;"; 
	echo $row['Message'];
	echo "&nbsp;</td><td valign=top align=center width=15><input type='text' name='Called' size='1' style='font-size: 7pt; text-align:center' tabindex='1' value='".$row['Called']."'>";  
	echo "</td><td valign=top align=center width=15><input type='text' name='LM' size='1' style='font-size: 7pt; text-align:center' tabindex='2' value='".$row['LM']."'>";
	echo "</td><td valign=top width=30 align=center><textarea rows='3' name='Result' cols='52' style='font-size: 8pt; text-align:left'>";
	echo $row['Result']; 
	echo "</textarea></td><td valign=top align=center><font size=1 face=Times New Roman>"; 
	echo "<input type='submit' value='Update' name='Update' style='font-size: 8pt; font-family: Times New Roman; color: #800000; padding-left: 0px; padding-right: 0px; padding-top: 0px; padding-bottom: 0px; background-color: #FFFFFF'>";
	echo "</td></tr></form>"; 
 
}

echo "</table>";

mysql_close($con);

?>
</td>
</tr>
</table>
</div>
</body>

</html>