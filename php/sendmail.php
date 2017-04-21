<?php
// Replace this with your own email address
$siteOwnersEmail = 'mrmrg993@gmail.com';
if($_POST) {
   $name = trim(stripslashes($_POST['Name']));
   $email = trim(stripslashes($_POST['Email']));
   $subject = trim(stripslashes($_POST['Subject']));
   $category = trim(stripslashes($_POST['Category']));
   $contact_message = trim(stripslashes($_POST['Message']));
   $mnumber = trim(stripslashes($_POST['MobileNumber']));
   // Set Message
   $message .= "Email from: " . $name . "<br />";
   $message .= "Email address: " . $email . "<br />";
   $message .= "Message: <br />";
   $message .= $contact_message;
   $message .= "<br /> ----- <br /> This email was sent from your website'scontact form. <br />";
   // Set From: header
   $from =  $name . " <" . $email . ">";
   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
      ini_set("sendmail_from", $siteOwnersEmail); // for windows server
      $mail = mail($siteOwnersEmail, $subject, $message, $headers);
		if ($mail) { echo "OK"; }
      else { echo "Something went wrong. Please try again."; }
		
}
?>