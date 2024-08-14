<?php 
require("Connection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$messege = $_POST['messege'];

$q = mysqli_query($con, "INSERT INTO `Contact_Form`(`FullName`, `Email`, `Subject`, `Phone`, `Message`) VALUES ('$name','$email','$subject','$phone','$messege')");
if($q==TRUE){
    //echo "<script>alert('Thanks for Connecting with us.')</script>";
    header('Location: ../contact?msg=true');
}else{
    //echo "<script>alert('Somethig Went Wrong.')</script>";
    header('Location: ../contact?msg=true');
}
?>