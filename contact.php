<?php

if (isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$name = $_POST['firstname']." ". $_POST['lastname'];
$email = $_POST['email'];
$interest = $_POST['interest'];
$subject = "Contact form Entry: ".$interest;
$tel = $_POST['tel'];
$message = $_POST['message'];
$mailTo = "info@wackohemp.com";
$headers = "From:".$email;
$txt = "You have received and email from " .$firstname.".".$lastname.".\n\n".$tel.".\n\n".$interest."\n\n".$message."\n\n".$name;
mail($mailTo, $subject, $txt, $headers);
header( 'Location: https://www.wackohemp.com/thankyou.html' ) ;
exit;

}



