<?php 
include '../mdhealth_utils.php';

$scoredUser = null;
try {
    if ('vid_test' == $_REQUEST['formname']) {
        $scoredUser = recordTestScore();

        echo $scoredUser;
        
        // return $scoredUser;
        
    }
    else {
        $testData = getUserTestData($_REQUEST['user_id']);

        echo $testData;
        
        //  return $testData;
    }
} 
catch (Exception $e) {
    print_r($e);

    echo $e;
}
    