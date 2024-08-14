<?php
//get data from form  
echo"1";
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_post['phone'];
$subject=$_post['subject'];
$message= $_POST['message'];
$to = "mympsbkn@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n subject=" .$subject  " \r\n Message =" . $message;
$headers = "From:" $email. "\r\n" .
"CC: support@mpsbikaner.in";
if($email!=NULL)
{
	echo"1";
    mail($to,$subject,$txt,$headers);
	echo"2";
}
//redirect

?>