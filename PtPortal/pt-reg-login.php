<?php 
include '../mdhealth_utils.php';

if ($_REQUEST['formname'] == 'form#formLogin') {
    $dta = loginPatient();
    echo $dta;
}
else {
    $regData = null;
    try {
        $regData = registerPatient();
    } catch (Exception $e) {
        $regData = $e;
        print_r($e);
    }
    
    echo $regData;
}
