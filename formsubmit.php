<?php 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $formcontent = "From: " . $name . " (" . $email . ") " . "\n" . "Message: " . $message;
  $recipient = "lydiaquon@gmail.com";
  //$mailheader = "From: " . $email . "\r\n";
  mail($recipient, $subject, $formcontent) or die("Error!");
  echo "Thank You!";
?>