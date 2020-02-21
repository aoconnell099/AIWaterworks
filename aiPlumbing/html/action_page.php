<?php
// the message
$msg = $_POST["message"];
echo $msg;

$name = $_POST["name"];
echo $name."\n";

$phone = $_POST["phoneNumber"];
echo $phone."\n";

$subject = $_POST["subject"];
echo $subject."\n";

$header = "From: " . $name . "\r\n" . 
            "Phone: " . $phone . "\r\n" .
             "Subj: " . $subject;

echo $header;

// use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);

// send email
mail("6309179099@txt.att.net","",$msg,$header);
?>