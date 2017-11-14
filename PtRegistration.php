<?php 


	//	$formname = $_REQUEST['formname'];
		
		$PtFName = $_REQUEST['PtFName'];
		$PtLName = $_REQUEST['PtLName'];
		$DOB = $_REQUEST['DOB'];
		$Phone = $_REQUEST['Phone'];
		$Email = $_REQUEST['Email'];
		$Password = $_REQUEST['Password'];

	 //  echo '$formname';
		
	$mailAddress = 'rk@md-hc.com';
	$cc = 'bob@md-hc.com';
	// $mailAddress = 'justin.white@gmail.com,' . $cc;
	// $mailAddress = 'justin.white@gmail.com';
	$subject = 'Patient Registration';
	
	$msg = "\r\n Name: $PtLName, $PtFName\r\n \r\n DOB: $DOB\r\n \r\n Phone: $Phone\r\n \r\n Email: $Email\r\n \r\n Password: $Password\r\n \r\n";
	
	$headers = "MIME-Version: 1.0\r\n Content-type:text/plain; charset=utf-8\r\n From: [" . $PtLName . "]" . $Email . " \r\n Reply-To: " . $Email . "\r\n X-Mailer: PHP/" . phpversion();
		
	mail($mailAddress, $subject, $msg, $headers);

echo 'Email Sent';
    
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

$sql = "INSERT INTO PtRegister(PtFName, PtLName, DOB, Phone, Email, Password) VALUES ( '$PtFName', '$PtLName', '$DOB', '$Phone', '$Email', '$Password')";

if (mysqli_query($conn, $sql)) {

echo '<SCRIPT LANGUAGE="JavaScript">
        
window.location.href="http://mdhealthclinics.com/PtPortalLogon.php";
    
//document.ready = function() {show_alert(),};
 
</SCRIPT>';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
   
echo 'Put into DB';
  

   // echo ("<SCRIPT LANGUAGE='JavaScript'>
    //       window.alert('Try Again');,
   // window.location.href='http://mdhealthclinics.com/PtPortalLogon.php';,
    
    //   </SCRIPT>");
       
    //   echo ("<SCRIPT LANGUAGE='JavaScript'>
  //         window.location.href='http://mdhealthclinics.com/PtPortalLogon.php'//;


