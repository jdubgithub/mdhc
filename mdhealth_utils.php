<?php 

require_once 'src/com/mdhealthclinics/UserData.php';

// define('DB_HOST', '70.164.1.244');
define('DB_HOST', 'localhost');
define('DB_NAME', 'mdhealth_db');
define('DB_USER', 'mdhealth_rk');
define('DB_PASS', 'Sevens@7');

function loginPatient() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    $email = $_REQUEST['Email'];
    $pass  = $_REQUEST['Password'];

    $qry = "SELECT id, first_name, last_name, dob, phone FROM Users where email_address = '$email' and password = '$pass' LIMIT 1";
    
    $result = $conn->query($qry);
    $outp = $result->fetch_all(MYSQLI_ASSOC);

    if ($outp) {
        $jsonoutp = json_encode($outp);

        $uData = new UserData();
        $uData->setId($outp[0]['id']);
        $uData->setFirstName($outp[0]['first_name']);
        $uData->setLastName($outp[0]['last_name']);
        $uData->setDob($outp[0]['dob']);
        $uData->setPhone($outp[0]['phone']);

        $uData->setEmailAddress($email);
        
        session_start();

        $_SESSION['userData'] = $uData;

        return $jsonoutp;
    }
    
    return false;
}

function registerPatient() {
    if (!isEmailAvailable($_REQUEST['Email'])) {

        $returnVal = [];
        $returnVal['error'] = 'Email Address Taken.  Already Registered?';
        return json_encode($returnVal);

        // throw new Exception("Email Address Taken.  Already Registered?");
    }
    else {
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
}

function isEmailAvailable($email) {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    $qry = "SELECT id FROM Users where email_address = '$email' LIMIT 1";
    
    $result = $conn->query($qry);
    $outp = $result->fetch_all(MYSQLI_ASSOC);
    
    if ($outp && $outp[0]) {
        return false;
    }
    
    return true;
}

function userMailer($subject, $first_name, $last_name, $dob, $phone, $email, $password, $notes) {
    $mailAddress = 'justin.white@gmail.com';
    // $mailAddress = 'rk@md-hc.com';
    $subject = 'Patient Registration';
    
    $msg = "\r\n Name: $last_name, $first_name\r\n \r\n DOB: $dob\r\n \r\n Phone: $phone\r\n \r\n Email: $email\r\n \r\n Password: $password\r\n \r\n";
    
    $headers = "MIME-Version: 1.0\r\n Content-type:text/plain; charset=utf-8\r\n From: [" . $last_name . "]" . $email . " \r\n Reply-To: " . $email . "\r\n X-Mailer: PHP/" . phpversion();
        
    return mail($mailAddress, $subject, $msg, $headers);
}

function getQandAs($mediaId) {
    ini_set("auto_detect_line_endings", true);

    $cntr = 0;
    if ($qnafile = fopen("PtPortal/Docs/$mediaId.txt", "r") or die("Unable to open file!")) {
        
    // while(!feof($qnafile)) {
     while($qnaLine = fgets($qnafile)) {
        // $qnaLine = fgets($qnafile);

        // $qnaLine = str_replace("\n","",$qnaLine);

        if ($cntr == 0) {
            // $jsObj[$mediaId][$cntr]['title'] = str_replace("\r\n", "", $qnaLine);
            $jsObj[$mediaId][$cntr]['title'] = $qnaLine;
        }
        else {
            $qnaExploded = explode("~", $qnaLine);
            
            $qnaExplodedCount = count($qnaExploded);
            
            if ($qnaExplodedCount > 1) {
                $question = $qnaExploded[0];
                $jsObj[$mediaId][$cntr]['question'] = $question;
                $answer = $qnaExploded[($qnaExplodedCount - 1)];
                
                $answerArray = [];
                
                for($i = 1; $i < count($qnaExploded) && $i != count($qnaExploded) - 1; $i++) {
                    array_push($answerArray, $qnaExploded[$i]);
                }
                $jsObj[$mediaId][$cntr]['answers'] = $answerArray;
                $jsObj[$mediaId][$cntr]['answer'] = str_replace("\r\n", "", $answer);
            }
        }
        $cntr += 1;
    }
    }
    
    // $jsObjeParsed = json_encode($jsObj);
    $jsObjeParsed = json_encode($jsObj);
    
    $mediaIdVar = (string)$mediaId;
    
    return "<script>\r\n var $mediaIdVar = $jsObjeParsed; \r\n</script>";
    
    fclose($qnafile);
}