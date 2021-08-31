<?php
//get data from form 
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];

$to = "dakshattri98@gmail.com";

$subject = "Mail From Dj punjab";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message.";

$headers = "From: noreply@Djpunjab.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:Thankyou.html");
}
//redirect
//
?>
