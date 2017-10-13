<?php
$ID = $_GET['ID']; 
//echo $ID;
// Make a MySQL Connection
mysql_connect("mysql2.nextmill.net", "rk", "Sevens@7") or die(mysql_error());
mysql_select_db("mdhealthclinics_mdhealthclinics") or die(mysql_error());

// Get all the data from the "studentdata" table 
$result=mysql_query("select * FROM addys WHERE ID='$ID'") or die(mysql_error());
$data=mysql_fetch_array($result);

$ID = $data["ID"];

?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache"> 

<title>Students Record</title>

<script LANGUAGE="JavaScript">
<!--

function confirmSubmit()
{
var agree=confirm("Check you changes. Are you sure you want to change the Students data?");
if (agree)
	return true ;
else
	return false ;
}
// -->
</script>

</head>

<body link="#800000" vlink="#800000" alink="#800000" >

<form name=update method="POST" action="UpdateData.php">

	<div align="center">
	<table border="1" width="1078" height="479">
<tr  width="100%" bgcolor=#F4F4F4> 
<th colspan="3" align="center" style="letter-spacing: 4pt; align:center" height="31">
<font face="Elephant" size="5" color="#800000">ADDYS INFO</font></th> 
</tr>
<tr  width="100%" bgcolor=#F4F4F4> 
<th colspan="3" align="center" style="letter-spacing: 4pt; align:center" height="31">
<font color="#333333">

<a href="http://www.mdhealthclinics.com/marketing/ViewAddyData.php" target="_self">
<font color="#800000" size="4">Return To Addresses</font></a></font>
</th> 
</tr>

</tr>
		<tr>
			<td width="1068" bgcolor="#000000" colspan="3" height="25">
			<p align="center" style="margin-top: 0; margin-bottom: 0"><b>
			<font face="Times New Roman" size="4" color="#FFFFFF">ID 
			Number </font></b><font size="4">

<input readonly name="ID" size="7" style="margin:0; text-align:center; word-spacing:0; font-family:Times New Roman; font-size:12pt; color:#800000; font-weight:bold" value="<? echo $data["ID"]?>"></font>

			
</td>
			</tr>

		<tr>
			<td bgcolor="#F0F8FF" width="285" height="28">
			<p align="left"><b><font face="Times New Roman">First Name</font><font face="Times New Roman" size="2"> 
			</font></b><font size="3" face="Times New Roman">
			<input name="FName" size="25" style="margin:1; text-align:left; word-spacing:0; font-family:Times New Roman; color:#000000; font-weight:700" value="<? echo $data["FName"]?>"></font></td>
			<td width="414" bgcolor="#F0F8FF" height="28">
			<p align="left"><b><font face="Times New Roman">Last Name</font><font face="Times New Roman" size="2"> 
			</font></b><font size="3" face="Times New Roman">
			<input name="LName" size="25" style="margin:1; text-align:left; word-spacing:0; font-family:Times New Roman; color:#000000; font-weight:700" value="<? echo $data["LName"]?>"></font></td>
			<td width="357" bgcolor="#F0F8FF" height="28">
			<p align="left" style="margin-top: 0; margin-bottom: 0"><b>
			<font face="Times New Roman">Title
			<input name="Title" size="18" style="margin:1; text-align:left; word-spacing:0; font-family:Times New Roman; font-size:12px; color:#000000; font-weight:700" value="<? echo $data["Title"]?>"></font></b></td>
		


</td>


		</tr>

		<tr>
			<td bgcolor="#F0F8FF" width="285" height="28"><b><font face="Times New Roman">Company
			<input name="Company" size="49" style="margin:1; text-align:left; word-spacing:0; font-family:Times New Roman; font-size:12px; color:#000000; font-weight:700" value="<? echo $data["Company"]?>"></font></b></td>
			<td width="414" bgcolor="#F0F8FF" height="28"><b><font face="Times New Roman">
			Specialty
			<input name="Specialty" size="48" style="margin:1; text-align:left; word-spacing:0; font-family:Times New Roman; font-size:12px; color:#000000; font-weight:700" value="<? echo $data["Specialty"]?>"></font></b></td>
			<td width="357" bgcolor="#F0F8FF" height="28">
			<p align="left" style="margin-top: 0; margin-bottom: 0">
			<font face="Times New Roman"><b>
						Priority 
			
<input name="Priority" size="16" style="margin:1; text-align:left; word-spacing:0; font-family:Times New Roman; font-size:12px; color:#000000; font-weight:700" value="<? echo $data["Priority"]?>"> </b></font>
			<font size="2"><span style="font-family: Times New Roman">High, 
			Medium, Low</span></font></td>
		</tr>

		<tr>
			<td align="left" bgcolor="#F0F8FF" width="1056" height="16" colspan="3">
			<font size="1">&nbsp;&nbsp; </font></td>
			
		</tr>

		<tr>
			<td align="left" bgcolor="#F0F8FF" width="285" height="23">
			<b><font face="Times New Roman">Address</font></b></td>
			<td width="414" bgcolor="#F0F8FF" height="23">
			<b><font face="Times New Roman">Contact Info</font></b></td>
			<td width="357" bgcolor="#F0F8FF" height="23"><b>
			<font face="Times New Roman">Scheduling Info</font></b></td>
			
		</tr>

		<tr>
			<td bgcolor="#F0F8FF" align="left" width="285" height="27">
			<font face="Times New Roman" size="2" color="#333333">Street 
			</font><b><font face="Times New Roman" size="2" color="#333333" color="#333333">
			<input type="text" name="Address" size="54" style="margin:1; text-align:left; word-spacing:0; font-family:Times New Roman; font-size:12px; color:#000000" value="<? echo $data["Address"]?>"></font></b></td>
			<td align="left" bgcolor="#F0F8FF">
			<p style="margin-top: 0; margin-bottom: 0"><font face="Times New Roman" size="2" color="#333333">Phone </font>
			<font face="Times New Roman" size="1">
			<input type="text" name="Phone" maxlength="10" size="15" style="margin:1; text-align:left; word-spacing:0; font-family:Times New Roman; font-size:12px; color:#000000" value="<? echo $data["Phone"]?>"></font></td>
			<td width="357" bgcolor="#F0F8FF" align="left" height="27">
			<font size="2"><span style="font-family: Times New Roman">Date Seen
			
<input type="text" name="DateSeen" size="29" style="margin:1; text-align:left; word-spacing:0; font-family:Times New Roman; font-size:12px; color:#000000" value="<? echo $data["DateSeen"]?>">
			</span></font></td>
		</tr>

		<tr>
			<td bgcolor="#F0F8FF" align="left" width="285" height="27">
			<font face="Times New Roman" size="2" color="#333333">City 
			</font><font face="Times New Roman" size="1">
			<input type="text" name="City" size="55" style="margin:1; text-align:left; word-spacing:0; font-family:Times New Roman; font-size:12px; color:#000000" value="<? echo $data["City"]?>"></font></td>
			<td width="414" align="left" bgcolor="#F0F8FF" height="27">
			<p><font face="Times New Roman" size="2" color="#333333">Email </font>
			<font face="Times New Roman" size="1">
			<input type="text" name="Email" size="26" style="margin:1; text-align:left; word-spacing:0; font-family:Times New Roman; font-size:12px; color:#000000" value="<? echo $data["Email"]?>"></font></td>
			<td width="357" bgcolor="#F0F8FF" align="left" height="27">
			<font size="2"><span style="font-family: Times New Roman">Reschedule 
			1
			<input type="text" name="DateMailed" size="24" style="margin:1; text-align:left; word-spacing:0; font-family:Times New Roman; font-size:12px; color:#000000" value="<? echo $data["DateMailed"]?>"></span></font></td>
		</tr>

		<tr>
			<td bgcolor="#F0F8FF" align="left" width="285" height="27">
			<font face="Times New Roman" size="2" color="#333333">Zip 
			</font><font face="Times New Roman" size="1">
			<input type="text" name="Zip" size="9" style="margin:1; text-align:left; word-spacing:0; font-family:Times New Roman; font-size:12px; color:#000000" value="<? echo $data["Zip"]?>"></font></td>
			<td width="414" align="left" bgcolor="#F0F8FF" height="27">
			<p align="right">&nbsp;</td>
			<td width="357" bgcolor="#F0F8FF" align="left" height="27">
			<font size="2"><span style="font-family: Times New Roman">
			Reschedule 2
			
<input type="text" name="Followup" size="21" style="margin:1; text-align:left; word-spacing:0; font-family:Times New Roman; font-size:12px; color:#000000" value="<? echo $data["Followup"]?>"></span></font></td>
		</tr>

		<tr>
			<td bgcolor="#F0F8FF" align="right" colspan="3" height="175">
			<p align="center" style="margin-top: 0; margin-bottom: 0"><b>
			Commentss</b></p>
			<p align="center" style="margin-top: 0; margin-bottom: 0">
			<textarea rows="6" name="PracticeType" cols="65"><? echo $data["PracticeType"]?></textarea></p>
			<p align="center" style="margin-top: 0; margin-bottom: 0">&nbsp;</td>
		</tr>

		<tr>
			<td width="1068" bgcolor="#000000" colspan="3" height="29">
			<p align="center">
	<input type="submit" value="Are You Sure Of Your Changes" name="Submit" onClick="return confirm('Check you changes. Are you sure you want to change the Students data?');" style="color: #000000; font-family: Times New Roman; font-size: 12pt; letter-spacing: 1pt; font-style: italic; background-color: #E8E8E8">

</td>
		
</tr>

		</table>
	</div>
	<p align="center" style="margin-top: 0; margin-bottom: 0">
	&nbsp;</p>

</form>


</body>

</html>