<?php
// the message
$msg = $_POST["message"];
echo $msg;

$name = $_POST["name"];
echo $name;

$phone = $_POST["phoneNumber"];
echo $phone;

$subject = $_POST["subject"];
echo $subject;

$header = "From: " . $name . "\r\n" . 
            "Phone: " . $phone . "\r\n" .
             "Subject: " . $subject;

$headers = array((string) $name, (string) $phone, (string) $subject);

// use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);

// send email
mail("6309179099@txt.att.net","",$msg,$header);
?>