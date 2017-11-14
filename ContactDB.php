<?php
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

$PtFName = $_REQUEST['PtFName'];
$PtLName = $_REQUEST['PtLName'];
$DOB = $_REQUEST['DOB'];
$Phone = $_REQUEST['Phone'];
$Email = $_REQUEST['Email'];
$Subject = $_REQUEST['Subject'];
$Message = $_REQUEST['Message'];

$sql = "INSERT INTO Contacts(PtFName, PtLName, DOB, Phone, Email, Subject, Message) VALUES ( '$PtFName', '$PtLName', '$DOB', '$Phone', '$Email', '$Subject', '$Message')";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>

