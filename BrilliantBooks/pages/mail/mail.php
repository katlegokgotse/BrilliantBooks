<?php
  $to = userEmailAddress;
  $subject = "Welcome to Brilliant Books";
  $txt = "This is an email of verification of your application into our ecosystem";
  $headers = "From: ST10208619@rcconnect.edu.za" . "\r\n" . "CC: ." $to;
  mail($to, $subject, $txt, $headers);
?>