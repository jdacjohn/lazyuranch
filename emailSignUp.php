<?php
	$to = 'riohondo@lazyuranch.com';
	//$to = 'john@jdacsolutions.com';
	$subject = 'Lazy U Ranch - Mailing List Request';
		
	$from = $_REQUEST['news_mail'];
	//echo($from);
	$headers = 'From: ' . $from;
	
	$body = "Someone has submitted their email address to be added to the Lazy U Ranch Email List\n\n"; 
	$body .= "The address to be added is shown below:\n\n";
	$body .= $from . "\n\n";
	$headers2 = "From: noreply@lazyuranch.com";
	$subject2 = "Lazy U Ranch - Mailing List";
	$autoreply = "Thank you for joining Lazy U Ranch's Mailing List. We have received your email address and will include you in future mailings.";
	
	if (($from != 'Your email address') && ($from != '')) {
		$send = mail($to, $subject, $body, $headers);
		$send2 = mail($from, $subject2, $autoreply, $headers2);
		if($send) {
			header("Location: " . $_SERVER['HTTP_REFERER'] . "?eflag=1");
			//header("Location: http://www.lazyuranch.com/testSite/lodging/rates/ThankYou.php");
		} else {
			print "We encountered an error sending your mail, please notify riohondo@lazyuranch.com";
		}
	} else {
			header("Location: " . $_SERVER['HTTP_REFERER'] . "?eflag=2");
	}
	
?>
