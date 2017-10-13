<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>TAB Message</title>

<?php

$MsgDate = $_POST['MsgDate'];
$MsgTime = $_POST['MsgTime'];
$CallerName = $_POST['CallerName'];
$CurrentPt = $_POST['CurrentPt'];
$InsCarrier = $_POST['InsCarrier'];
$PolicyNum = $_POST['PolicyNum'];
$DOB = $_POST['DOB'];
$TelNum = $_POST['TelNum'];
$BTRC = $_POST['BTRC'];
$Message = $_POST['Message'];

// Make a MySQL Connection
$con=mysql_connect("mysql2.nextmill.net", "rk", "Sevens@7") or die(mysql_error());
mysql_select_db("mdhealthclinics_mdhealthclinics") or die(mysql_error());

mysql_query("INSERT INTO tab (MsgDate, MsgTime, CallerName, CurrentPt, InsCarrier, PolicyNum, DOB, TelNum, BTRC, Message) VALUES ('$MsgDate', '$MsgTime', '$CallerName', '$CurrentPt', '$InsCarrier', '$PolicyNum', '$DOB', '$TelNum', '$BTRC', '$Message')") or die(mysql_error());

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

Thank you for sending the message below.</font></th>
</tr>

<form method="POST" action="#">
<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="8" rowspan="22">
&nbsp;</th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

&nbsp;</th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

&nbsp;</th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="4" rowspan="22">
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

<p style="margin-top: 0; margin-bottom: 0" align="right">
<span style="font-weight: 400">Current Pt:</span></p></th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

<font color="#00246F">
	<input name="CurrentPt" size="40" value="<? echo $CurrentPt ?>"></font></th>
</tr>

<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

&nbsp;</th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

&nbsp;</th>
</tr>

<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

<p align="right"><span style="font-weight: 400">Ins Carrier:</span></th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

<font color="#00246F">
	<input name="InsCarrier" size="40" value="<? echo $InsCarrier ?>"></font></th>
</tr>
<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

&nbsp;</th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

&nbsp;</th>
</tr>
<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

<p align="right"><span style="font-weight: 400">Policy Num:</span></th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

<font color="#00246F">
	<input name="PolicyNum" size="40" value="<? echo $PolicyNum ?>"></font></th>
</tr>
<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

&nbsp;</th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

&nbsp;</th>
</tr>
<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

<p align="right"><span style="font-weight: 400">DOB:</span></th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

<font color="#00246F">
	<input name="DOB" size="40" value="<? echo $DOB ?>"></font></th>
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

<p align="right"><span style="font-weight: 400">BTRC:</span></th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

<font color="#00246F">
	<input name="BTRC" size="40" value="<? echo $BTRC ?>"></font></th>
</tr>
<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

&nbsp;</th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

&nbsp;</th>
</tr>

<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

<p align="right"><span style="font-weight: 400">Message:</span></th>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="288" align="left">

<font color="#00246F">
	<input name="Message" size="40" value="<? echo $Message ?>"></font></th>
</tr>

<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " width="178">

&nbsp;</th>

</tr>

</form>

<tr>
<th bgcolor="#FFFFFF" style="border-style:none; border-width:medium; " colspan="4">
&nbsp;<p style="margin-top: 0; margin-bottom: 0"><font size="2" color="#00246F">Plz remember to encourage the patient to answer 
all questions.</font></th>
</tr>
</table></div>

</body>

</html>