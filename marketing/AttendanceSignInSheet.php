<?php
$City = $_POST['City'];
$DateSeen = $_POST['DateSeen']; 

$order = "SLName";
$sort = "ASC";

// Make a MySQL Connection
mysql_connect("mysql2.nextmill.net", "rk", "Sevens@7") or die(mysql_error());
mysql_select_db("mdhealthclinics_mdhealthclinics") or die(mysql_error());


// Get all the data from the "studentdata" table
mysql_query("SELECT * FROM addys WHERE City = '$City' ORDER BY $order $sort") or die(mysql_error());

?>

<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Address Sheet</title>

</head>

<Body link="#990000" vlink="#990000" alink="#C0C0C0">

<div align="center">

<table border="1" width="1000" style="border-width: 0px">
 
<tr colspan="5" width="100%" bgcolor=#F4F4F4> 
<th align="center" style="letter-spacing: 4pt; align:center" colspan="5">
<font face="Elephant" size="5" color="#800000">ADDRESS SHEET</font></th> 
</tr>

<tr height=30 colspan="5" width="100%" bgcolor=#F4F4F4> 
<th align="center" style="letter-spacing: 4pt; align:center" colspan="5">
<font size=2 face=Times New Roman color="#000000">Class: <? echo $SClass ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Start Date: <? echo $City ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Instructor: <? echo $DateSeen ?></font></th></font></th> 
</tr>

<?php

// Get all the data from the "studentdata" table
$result = mysql_query("SELECT * FROM addys WHERE City = '$City' ORDER BY $order $sort") or die(mysql_error());

echo "<tr height=30 bgcolor=#F4F4F4 width=1100>
<th>Name</th> 
<th>In Start</th>
<th>Out Break</th>
<th>In Break</th>
<th>Out Dismissed</th>
</tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
	echo "<tr height=80 valign=middle align=center><td width='20%'align=center><font size=3 face=Times New Roman><b>&nbsp;"; 
	echo $row['FName'];
	echo "&nbsp;";
	echo $row['LName'];
	echo "&nbsp;</b></td><td width='18%' align=center ><font size=2 face=Times New Roman>";
	echo "&nbsp;</td><td width='18%' align=center><font size=2 face=Times New Roman>";
	echo "&nbsp;</td><td width='18%' align=center><font size=2 face=Times New Roman>";
	echo "&nbsp;</td><td width='18%' align=center><font size=2 face=Times New Roman>";
	echo "&nbsp;</td>";
	echo "</tr>"; 

}
 
	echo "<tr height=80 valign=middle align=center><td>&nbsp;"; 
	echo "&nbsp;</td><td align=center><font size=2 face=Times New Roman>";
	echo "&nbsp;</td><td align=center><font size=2 face=Times New Roman>";
	echo "&nbsp;</td><td align=center><font size=2 face=Times New Roman>";
	echo "&nbsp;</td><td align=center><font size=2 face=Times New Roman>";
	echo "&nbsp;</td>";
	echo "</tr>"; 
	
		echo "<tr height=80 valign=middle align=center><td>&nbsp;"; 
	echo "&nbsp;</td><td align=center><font size=2 face=Times New Roman>";
	echo "&nbsp;</td><td align=center><font size=2 face=Times New Roman>";
	echo "&nbsp;</td><td align=center><font size=2 face=Times New Roman>";
	echo "&nbsp;</td><td align=center><font size=2 face=Times New Roman>";
	echo "&nbsp;</td>";
	echo "</tr>";
 
	echo "<tr height=80 valign=middle align=center><td>&nbsp;"; 
	echo "&nbsp;</td><td align=center><font size=2 face=Times New Roman>";
	echo "&nbsp;</td><td align=center><font size=2 face=Times New Roman>";
	echo "&nbsp;</td><td align=center><font size=2 face=Times New Roman>";
	echo "&nbsp;</td><td align=center><font size=2 face=Times New Roman>";
	echo "&nbsp;</td>";
	echo "</tr>"; 
?>




<tr>
<td height=80 align=center width="199" style="border-style: none; border-width: medium">
&nbsp;</td>

<td height=80 align=center width="199" style="border-style: none; border-width: medium">
&nbsp;</td>

<td height=80 align=center width="200" style="border-style: none; border-width: medium">&nbsp;</td>

<td height=80 align=center width="200" style="border-style: none; border-width: medium">
&nbsp;</td>

<td height=80 align=center width="200" style="border-style: none; border-width: medium">
&nbsp;</td>

</tr>


<tr>
<td height=30 align=center width="998" style="border-style: none; border-width: medium" colspan="5">
<p align="left"><b>
<span style="font-size: 14.0pt; font-family: 'Arial Narrow',sans-serif">
____________________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
________________________</span></b></td>

</tr>


<tr>
<td height=30 align=center width="998" style="border-style: none; border-width: medium" colspan="5"><font size=2 face=Times New Roman>
<p align="left"><b>
<span style="font-size: 14.0pt; font-family: 'Arial Narrow',sans-serif">Reviewed 
By Phlebotomy Program 
Director&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b>
</font><b>
<span style="font-size: 14.0pt; font-family: 'Arial Narrow',sans-serif">Date</span></b></td>

</tr>
</table>
</div>
</body>

</html>