<?php 
/**
 * @package Site Template
 * @subpackage Magique HTML
 * @since Magique 1.0
 */


$contact_url = '';

if (isset($_REQUEST['formtype']) && $_REQUEST['formtype'] == 'widget') {
	if (isset($_REQUEST['formname'])) {
		$formname = $_REQUEST['formname'];
		$field_002 = $_REQUEST['field_002'];
		$field_003 = $_REQUEST['field_003'];
		$field_004 = $_REQUEST['field_004'];
		
		// $mailAddress = 'rk@md-hc.com';
		$mailAddress = 'justin.white@gmail.com';
		$subject = 'Contact Form Submission - www.MDHealthClinics.com';
		$msg = "Message $field_002\r\n $field_003\r\n $field_004";
		$headers = "MIME-Version: 1.0\r\n Content-type: text/plain; charset=utf-8\r\n From: " . $_REQUEST[$result->slug] . "\r\n Reply-To: " . $_REQUEST[$result->slug] . "\r\n X-Mailer: PHP/" . phpversion();
		
		mail($mailAddress, $subject, $msg, $headers);
	}
} elseif (isset($_REQUEST['formtype']) && $_REQUEST['formtype'] == 'contactf') {
	if (isset($_REQUEST['formname'])) {
		$formname = $_REQUEST['formname'];
		$contact_name = $_REQUEST['contact_name'];
		$contact_email = $_REQUEST['contact_email'];
		if (isset($_REQUEST['contact_url'])) {
		  $contact_url = $_REQUEST['contact_url'];
		}
		$contact_subject = $_REQUEST['contact_subject'];
		$contact_message = $_REQUEST['contact_message'];
		
		$result_slug = 'justin.white@gmail.com';
		
		// $mailAddress = 'bob@md-hc.com';
		$mailAddress = 'justin.white@gmail.com';
		$subject = 'Contact Form Submission';
		$msg = "$contact_name\r\n $contact_email\r\n $contact_url\r\n $contact_subject\r\n $contact_message";
		$headers = "MIME-Version: 1.0\r\n Content-type: text/plain; charset=utf-8\r\n From: " . $contact_name . "\r\n Reply-To: " . $contact_email . "\r\n X-Mailer: PHP/" . phpversion();
		
		mail($mailAddress, $subject, $msg, $headers);
	}
}
