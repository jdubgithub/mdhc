<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>TAB Message</title>

<?php

$ID = $_POST['ID'];
$CallerName = $_POST['CallerName'];
$TelNum = $_POST['TelNum'];
$Called = $_POST['Called'];
$LM = $_POST['LM'];
$Result = $_POST['Result'];

// Make a MySQL Connection
$con=mysql_connect("mysql2.nextmill.net", "rk", "Sevens@7") or die(mysql_error());
mysql_select_db("mdhealthclinics_mdhealthclinics") or die(mysql_error());
 
$query="UPDATE tab SET Called='$Called', LM='$LM', Result='$Result' WHERE ID='$ID'";

mysql_query($query);

mysql_close($con);

?>

</head>

<body>
	<div align="center">
		<table border="0" cellspacing="0" cellpadding="0" style="border-width: 0px" width="478" >
<tr  width="100%" bgcolor=#F4F4F4> 
<th align="center" style="border-style:none; border-width:medium; letter-spacing: 4pt; align:center" colspan="4">
<p style="margin-top: 0; margin-bottom: 0">
<font face="Elephant" size="5" color="#00246F">MD Health Clinics</font></th> 
</tr>
<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " colspan="4">
&nbsp;<p style="margin-top: 0; margin-bottom: 0"><font color="#00246F">

Thank you for updating our data.</font></th>
</tr>

<form method="POST" action="#">
<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="8" rowspan="10">
&nbsp;</th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

&nbsp;</th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

&nbsp;</th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="4" rowspan="10">
&nbsp;</th>
</tr>
<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

<p style="margin-top: 0; margin-bottom: 0" align="right">
<span style="font-weight: 400">Caller Name:</span></p></th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

<p style="margin-top: 0; margin-bottom: 0"><font color="#00246F"> 
<input name="CallerName" size="40" value="<? echo $CallerName ?>"></font></p>
	</th>
</tr>
<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

&nbsp;</th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

&nbsp;</th>
</tr>

<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

<p align="right"><span style="font-weight: 400">Tel Num:</span></th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

<font color="#00246F">
	<input name="TelNum" size="40" value="<? echo $TelNum ?>"></font></th>
</tr>
<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

&nbsp;</th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

&nbsp;</th>
</tr>

<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

<p style="margin-top: 0; margin-bottom: 0" align="right">
<span style="font-weight: 400">Called:</span></p></th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

<font color="#00246F">
	<input name="Called" size="40" value="<? echo $Called ?>"></font></th>
</tr>

<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

&nbsp;</th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

&nbsp;</th>
</tr>

<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

<p align="right">
<span style="font-weight: 400">Left Message:</span></th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

<font color="#00246F">
	<input name="LM" size="40" value="<? echo $LM ?>"></font></th>
</tr>

<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

&nbsp;</th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

&nbsp;</th>
</tr>

<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

<p align="right">
<span style="font-weight: 400">Result:</span></th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

<font color="#00246F">
	<input name="Result" size="40" value="<? echo $Result ?>"></font></th>
</tr>

</form>

<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " colspan="4">
	<p style="margin-top: 0; margin-bottom: 0">&nbsp; </p>
	<p style="margin-top: 0; margin-bottom: 0"><font color="#00246F">
	<a href="http://www.mdhealthclinics.com/marketing/ViewTabData.php" style="text-decoration: none">
	<font color="#00246F">Return To Message Board</font></a></font></p>

</th>
</tr>
</table></div>

</body>

</html>