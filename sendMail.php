<?php
include_once("Mailer.php");
$mail = new Mailer();
if(isset($_POST['submit'])){
extract($_POST);
	$body="You've an enquiry from $fname $lname ($email). A message stating $message was added in the mail";
	$mail->send_mail($body,"Enquiry about YOU!");
}
header("Location: index.php");
?>