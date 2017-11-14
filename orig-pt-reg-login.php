<?php 
include 'mdhealth_utils.php';

define(DB_HOST, '127.0.0.1');
define(DB_NAME, 'mdhealth_db');
define(DB_USER, 'mdhealth_rk');
define(DB_PASS, 'Sevens@7');

if ($_REQUEST['formname'] == 'form#formLogin') {
    $dta = loginPatient();
    echo $dta;
    return $dta;
}
else {
    registerPatient();
}

function loginPatient() {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); 
    
    $queryResponse = 'data = ';

    if ($stmt = $mysqli->prepare("SELECT first_name, last_name from  FROM Users WHERE email = ? and password = ?")) {
        
        $stmt->bind_param("ss", $_REQUEST['Email'], $_REQUEST['Password']);
        
        $stmt->execute();
        
        $stmt->bind_result($f_and_l_names);
        
        $queryResponse = $stmt->fetch();
        
        // printf("hi %s %s\n", $f_and_l_names);
        
        /* close statement */
        $stmt->close();
        
        echo 'Auth Resposne echo';
        
        return 'Auth resposne';
        // return $f_and_l_names + $queryResponse;
        // echo $queryResponse;
        // return JSON.parse($queryResponse);
    }
    
    echo 'echoed data';
    return 'auth Response 2';
}

function registerPatient() {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); 
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
