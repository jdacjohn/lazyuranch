<?php
//	$to = 'riohondo@lazyuranch.com, da@thompsonprintsolutions.com, john@jdacsolutions.com';
	$to = 'riohondo@lazyuranch.com';
	$subject = 'Lazy U Ranch - Website Reservation Request';
	$fields = array();
	$fields{"resName"} 			= 'Reservation Name';
	$fields{"arrDate"} 			=	'Arrival Date    ';
	$fields{"depDate"} 			= 'Departure Date  ';
	$fields{"resStreet1"} 	= 'Address Line 1  ';
	$fields{"resStreet2"} 	= 'Address Line 2  ';
	$fields{"resCity"} 			= 'City            ';
	$fields{"resState"} 		= 'State           ';
	$fields{"resZip"} 			= 'Zip Code        ';
	$fields{"resHome"} 			= 'Home Phone      ';
	$fields{"resMobile"} 		= 'Mobile Phone    ';
	$fields{"resEmail"} 		= 'Email Address   ';
	$fields{"resParty"} 		= 'Number in Party ';
	$fields{"resComments"}	= 'Comments        ';
		
	$from = $_REQUEST['resEmail'];
	$headers = 'From: ' . $from;
	
	$body = "Someone has submitted a reservation form from the Lazy U Ranch website:\n\n"; 
	$body .= "The details for the reservation request are below:\n\n";
	foreach($fields as $a => $b){ 
		$body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); 
	}
	$body .= "\n\nPolicy Agreement Accepted via Reservation Form Submission.";
	
	$headers2 = "From: noreply@lazyuranch.com";
	$subject2 = "Lazy U Ranch - Online Reservation Request Form";
	$autoreply = "Thank you for submitting your online reservation request form. We have received your form via email and will be in touch shortly.";
	
	$send = mail($to, $subject, $body, $headers);
	$send2 = mail($from, $subject2, $autoreply, $headers2);
	if($send) {
		//header("Location: http://192.168.1.197/lazyuranch.com/testSite/lodging/rates/ThankYou.php");
		header("Location: http://www.lazyuranch.com/lodging/rates/ThankYou.php");
	} else {
		print "We encountered an error sending your mail, please notify Riohondo@lazyuranch.com";
	}
	
?>