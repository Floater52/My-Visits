<?php

$name = $_POST['name'];

$company = $_POST['company'];

$email = $_POST['email'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$from = "From: $email\r\n";

$mailmsg.= 'Full Name: ' . $name . "\n";
$mailmsg.= 'Company: ' . $company . "\n";
$mailmsg.= 'Email: ' . $email . "\n";
$mailmsg.= 'Subject: ' . $subject . "\n";
$mailmsg.= 'Message: ' . $message . "\n";

$send = mail('admin@dugansplace.com', 'Contact', $mailmsg, $from);

if($send){
// Change the index.html to whatever page you want this script to default to.
//echo "Thank you, $name. Your Custom Build Questionare has been sent. We will get back to you with a custom quote within 48 hours.";
//print "<meta http-equiv=\"refresh\" content=\"0;URL=../index.html\">";
//exit;
$URL = 'index.html';
print "<meta http-equiv=\"refresh\" content=\"0;URL=../index.html\">";
}

else{
echo "Something went wrong. Please try again!";
//print "<meta http-equiv=\"refresh\" content=\"0;URL=../contact.html\">";
//exit;
//$URL = 'failure.php';
//print "<meta http-equiv=\"refresh\" content=\"0;URL=../failure.php\">";
}

?>
