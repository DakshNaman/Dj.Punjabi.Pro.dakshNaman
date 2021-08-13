<?php
//get data from form 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "dakshattri98@gmail.com";

$subject = "Mail From Dj punjab";
$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\nMessage =" . $message.";

$headers = "From: noreply@Djpunjab.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:Thankyou.html");
?>