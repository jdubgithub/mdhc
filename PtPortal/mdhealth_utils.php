<?php 
// define('DB_HOST', '127.0.0.1');
// define('DB_NAME', 'mdhealth_db');
// define('DB_USER', 'mdhealth_rk');
// define('DB_PASS', 'Sevens@7');
define('DB_HOST', '70.164.1.244');
define('DB_NAME', 'mdhealth_db');
define('DB_USER', 'mdhealth_rk');
define('DB_PASS', 'Sevens@7');

function loginPatient() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    $email = $_REQUEST['Email'];
    $pass  = $_REQUEST['Password'];

    $qry = "SELECT id, first_name, last_name FROM Users where email_address = '$email' and password = '$pass' LIMIT 1";
    
    $result = $conn->query($qry);
    $outp = $result->fetch_all(MYSQLI_ASSOC);

    if ($outp) {
        $jsonoutp = json_encode($outp);

        session_start();

        $_SESSION['user'] = $outp[0]['id'];

      //  return $jsonoutp;
    }
    
    return false;
}

function registerPatient() {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $stmt = $mysqli->prepare("INSERT INTO Users (first_name, last_name, dob, phone, email_address, password, registration_notes) VALUES (?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'ssiisss', $PtFName, $PtLName, $DOB, $Phone, $Email, $Password, $notes);
    
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
    
    return $mailed;
}

function userMailer($subject, $first_name, $last_name, $dob, $phone, $email, $password, $notes) {
    $mailAddress = 'justin.white@gmail.com';
    // $mailAddress = 'rk@md-hc.com';
    $subject = 'Patient Registration';
    
    $msg = "\r\n Name: $last_name, $first_name\r\n \r\n DOB: $dob\r\n \r\n Phone: $phone\r\n \r\n Email: $email\r\n \r\n Password: $password\r\n \r\n";
    
    $headers = "MIME-Version: 1.0\r\n Content-type:text/plain; charset=utf-8\r\n From: [" . $last_name . "]" . $email . " \r\n Reply-To: " . $email . "\r\n X-Mailer: PHP/" . phpversion();
        
    return mail($mailAddress, $subject, $msg, $headers);
}
