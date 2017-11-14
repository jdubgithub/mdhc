<?php 

		$UN = $_REQUEST['UN'];
		$Password = $_REQUEST['PW'];

echo "$Email";

$servername = "localhost";
$database = "mdhealth_db";
$username = "mdhealth_bob";
$password = "Sevens@7";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database); 
    
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

echo "Connected successfully";


$sql = "SELECT * FROM PtRegister WHERE Email='$UN'");

//echo $sql["Email"];

//$result = mysqli_query($conn, $sql);

echo "$UN";




if (mysqli_query($conn, $sql)) {

echo 'did it';

//echo '<SCRIPT LANGUAGE="JavaScript">
        
//window.location.href="http://mdhealthclinics.com/Switchboard.php";
    
//</SCRIPT>';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

/*
if(mysqli_num_rows($result) > 0)
{
header("location: Switchboard.php");
}
else
{
echo 'could not find un or pw';
}
*/


//if (mysqli_query($conn, $sql)) {

//echo '<SCRIPT LANGUAGE="JavaScript">
        
//window.location.href="http://mdhealthclinics.com/PtPortalLogon.php";
    
//</SCRIPT>';
//} else {
//      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}


   
  

