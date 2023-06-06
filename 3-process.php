<?php
// (A) PROCESS STATUS
$status = "";

// (B) VERIFY CAPTCHA
$secret = "6LcIOykmAAAAAEONgHlcIuOnVGkp1NIGk2rAOKwP"; // CHANGE TO YOUR OWN!
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=".$_POST["g-recaptcha-response"];
$verify = json_decode(file_get_contents($url));
if (!$verify->success) { $status = "Invalid captcha"; }

// (C) SEND MAIL
if ($status=="") {
  $mailTo = "shannonrose1317@gmail.com"; // CHANGE TO YOUR OWN!
  $mailSubject = "Shannon Miller Contact Form";
  $mailBody = "";
  foreach ($_POST as $k=>$v) {
    if ($k!="g-recaptcha-response") { $mailBody .= "$k: $v\r\n"; }
  }
  if (@mail($mailTo, $mailSubject, $mailBody)) { $status = "OK"; }
  else { $status = "Failed to send mail"; }
}
echo $status;