
  
<?php
	if(isset($_POST['send_message_btn'])){
    $to = 'dutianrui05@gmail.com';
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    //$number = $_REQUEST['number'];
	$cmessage = $_POST['message'];
	
	
	//set content-type header in order to send HTML mail
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	//email headers
    //$headers = "From: $from";
	$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
    $subject = 'You have a message from your Clear Window Mask Website.';

    $logo = 'img/POWpowHearingLogo.PNG';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

	if(mail($to, $subject, $body, $headers)){
		echo 'Your mail has been sent successfully.';
	} else{
		echo 'Unable to send email. Please try again.';
	}
	//$send = mail($to, $subject, $body, $headers);
}

?>
