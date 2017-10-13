<?php
// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
// echo $myusername;
// echo $mypassword
;
// Make a MySQL Connection

mysql_connect("mysql2.nextmill.net", "rk", "Sevens@7") or die(mysql_error());
mysql_select_db("mdhealthclinics_mdhealthclinics") or die(mysql_error());
 
$sql="SELECT * FROM draddylogon WHERE Email='$myusername' and Password='$mypassword'";
$result=mysql_query($sql);
// $row = mysql_fetch_array( $result );
// echo $row['FName'];
// echo " <br>";
// echo $row['LName'];
// echo " <br>";
// echo $row['Email'];
// echo " <br>";
// echo $row['Password'];
// echo " <br>";
// Mysql_num_row is counting table row

$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// echo "Record Count = ";
// echo $count;
// echo " <br>";
// Register $myusername, $mypassword and redirect to file "login_success.php"
// session_register("myusername");
// session_register("mypassword");

session_start();
$_SESSION['myusername'] ="$myusername";
// echo $_SESSION['myusername'];
// echo " <br>";

$_SESSION['mypassword'] ="$mypassword";
// echo $_SESSION['mypassword'];

header("location:http://www.mdhealthclinics.com/marketing/login_success.php/");
}
else {
echo "Wrong Username or Password: Try Again or Contact MD Health Clinics Admin.";
 }

?>







