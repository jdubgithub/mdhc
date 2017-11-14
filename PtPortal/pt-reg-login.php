<?php 
include '../mdhealth_utils.php';

if ($_REQUEST['formname'] == 'form#formLogin') {
    $dta = loginPatient();
    echo $dta;
}
else {
    echo registerPatient();
}
