<?php 
include 'mdhealth_utils.php';

registerPatient();

function registerPatient() {
    $servername = '127.0.0.1';
    $database = 'mdhealth_db';
    $username = 'mdhealth_rk';
    $password = 'Sevens@7';

    $mysqli = new mysqli($servername, $username, $password, $database); 
    $stmt = $mysqli->prepare("INSERT INTO Users (first_name, last_name, dob, phone, email_address, password, registration_notes) VALUES (?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'ssiisss', $PtFName, $PtLName, $DOB, $Phone, $Email, $Password, $notes);

    // $stmt->bind_params('ssiisss', $PtFName, $PtLName, $DOB, $Phone, $Email, $Password, 'blah blah');
    // mysqli_stmt_bind_param($stmt, 's,s,i,i,s,s,s', $PtFName, $PtLName, $DOB, $Phone, $Email, $Password, 'blah blah' );
    
    //    $formname = $_REQUEST['formname'];
        
    $PtFName = $_REQUEST['PtFName'];
    $PtLName = $_REQUEST['PtLName'];
    $DOB = $_REQUEST['DOB'];
    $Phone = $_REQUEST['Phone'];
    $Email = $_REQUEST['Email'];
    $Password = $_REQUEST['Password'];
    $notes = 'N/A';
    $subject = 'User Registration';
    
    $stmt->execute();
    $stmt->close();
     
    $mailed = userMailer($subject, $PtFName, $PtLName, $DOB, $Phone, $Email, $Password, $notes);
}
