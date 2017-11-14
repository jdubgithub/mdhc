<?php 
/**
 * @package Site Template
 * @subpackage Magique HTML
 * @since Magique 1.0
 */


$contact_url = '';

if (isset($_REQUEST['formtype']) && $_REQUEST['formtype'] == 'contactf') {

	if (isset($_REQUEST['formname'])) {
		$formname = $_REQUEST['formname'];
		
		$PtFName = $_REQUEST['PtFName'];
		$PtLName = $_REQUEST['PtLName'];
		$DOB = $_REQUEST['DOB'];
		$Phone = $_REQUEST['Phone'];
		$Email = $_REQUEST['Email'];
		$Subject = $_REQUEST['Subject'];
		$Message = $_REQUEST['Message'];
		
		if (isset($_REQUEST['contact_url'])) {
		  $contact_url = $_REQUEST['contact_url'];
		}		
		
		$result_slug = 'justin.white@gmail.com';
	}
	else {
	    echo 'form name not set';
	}
		
	$mailAddress = 'rk@md-hc.com';
	$cc = 'bob@md-hc.com';
	// $mailAddress = 'justin.white@gmail.com,' . $cc;
	// $mailAddress = 'justin.white@gmail.com';
	$subject = 'Contact Form Submission';
	
	$msg = "\r\n Name: $PtLName, $PtFName\r\n \r\n DOB: $DOB\r\n \r\n Phone: $Phone\r\n \r\n Email: $Email\r\n \r\n Subject: $Subject\r\n \r\n Message: $Message \r\n";
	
	$headers = "MIME-Version: 1.0\r\n Content-type:text/plain; charset=utf-8\r\n From: [" . $PtLName . "]" . $Email . " \r\n Reply-To: " . $Email . "\r\n X-Mailer: PHP/" . phpversion();
		
	// mail($mailAddress, $subject, $msg, $headers);
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
} echo "Connected successfully";

$sql = "INSERT INTO Contacts(PtFName, PtLName, DOB, Phone, Email, Subject, Message) VALUES ( '$PtFName', '$PtLName', '$DOB', '$Phone', '$Email', '$Subject', '$Message')";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}

